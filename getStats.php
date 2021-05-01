<?php
#print_r( $_REQUEST );

include('connect.php');

$sql = "SELECT DATE_FORMAT(request_date, '%Y%m%d%H') as hr, count(*) as cnt from request_log
group by DATE_FORMAT(request_date, '%Y%m%d%H') 
order by DATE_FORMAT(request_date, '%Y%m%d%H');";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  $data = $result->fetch_all(MYSQLI_NUM);
} else {
  $data = array( array ("name", 123));
}
$data = json_encode($data);
echo $data;
$conn->close();
#echo json_encode(array("name","vndn"));
?>