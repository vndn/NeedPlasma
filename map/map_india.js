const stateMap = (states) => {

  var len = (window.visualViewport.height > window.visualViewport.width ?
    window.visualViewport.width : window.visualViewport.height) - 50
  var width = len, height = len - 100, scale = len + (0.1 * len)

  function render (selection) {
    selection.each(function () {

      d3.select(this).select('svg').remove()
      var svg = d3.select(this).
        append('svg').
        attr('width', width).
        attr('height', height)

      var projection = d3.geoMercator().
        center([83, 23]).
        scale(scale).
        translate([width / 2, height / 2])

      var path = d3.geoPath(projection);
      var selectState = svg.selectAll('g').
        data(states).
        enter().
        append('g').
        attr('class', 'state')

      var max_donor = state_donor['Nagaland'].beneficiaries

      for (const state in state_donor) {
        if (state_donor[state].beneficiaries > max_donor)
          max_donor = state_donor[state].beneficiaries
      }

      var linScale = d3.scaleLinear().domain([0, max_donor]).range([0, 1])

      var tooltip_div = d3.select('body').
        append('div').
        attr('class', 'tooltip').
        style('opacity', 0)

      selectState.append('path').
        attr('stroke', 'rgba(98,53,49,0.15)').
        attr('fill', '#fff').
        attr('fill', d => {
          return d3.interpolateYlGnBu(
            linScale(state_donor[d.properties.name].beneficiaries))
        })
        //.style("fill", function(d) { return color[Math.floor(Math.random() * 5)]; })
        .attr('d', path).
        style('opacity', 0.8).
        on('mouseenter', (mouseEvent, d) => {
          d3.select(this).transition().duration(200).style('opacity', 1)
          tooltip_div.transition().duration(200).style('opacity', 1)
          tooltip_div.html(d.properties.name + '<br>beneficiaries : ' +
            state_donor[d.properties.name].beneficiaries).
            style('left', (mouseEvent.pageX) + 'px').
            style('top', (mouseEvent.pageY - 30) + 'px');

        }).
        on('mouseleave', function (mouseEvent, d) {
          d3.select(this).transition().duration(300).style('opacity', 0.8);
          tooltip_div.transition().duration(300).style('opacity', 0);
        })
    })
  }

  render.height = function (value) {
    if (!arguments.length) return height
    height = value
    return render
  }
  render.width = function (value) {
    if (!arguments.length) return width
    width = value
    return render
  }
  render.scale = function (value) {
    if (!arguments.length) return scale
    scale = value
    return render
  }

  return render
}

const initializeMap = () => {

  d3.json('india.geo.json').then(topoMap => {
    var states = topojson.feature(topoMap, topoMap.objects.India_map)

    // Map render
    var len = (window.visualViewport.height > window.visualViewport.width ?
      window.visualViewport.width : window.visualViewport.height) - 50
    var map = stateMap(states.features)
    d3.select('#map').call(map)
  });
}

initializeMap()
