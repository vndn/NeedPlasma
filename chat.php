<?php
include('internal/config.php');
include('internal/utils.php');

$GLOBALS['page'] = 'chat';

include('internal/header.php');

?>

<main>
<!-- Chat theme credits = https://codepen.io/sajadhsm/pen/odaBdd -->
<div class="container">
    <div class="row center-align">
        <div class="col m10 offset-m1 s12 center-align">   
            <section class="msger">
                <header class="msger-header">
                    <div class="msger-header-title">
                    <i class="fas fa-comment-alt"></i> SimpleChat
                    </div>
                    <div class="msger-header-options">
                    <span><i class="fas fa-cog"></i></span>
                    </div>
                </header>

                <main class="msger-chat">
                    <div class="msg left-msg">
                        <div
                            class="msg-img"
                            style="background-image: url(https://image.flaticon.com/icons/svg/327/327779.svg)">
                        </div>

                        <div class="msg-bubble">
                            <div class="msg-info">
                            <div class="msg-info-name">BOT</div>
                            <div class="msg-info-time initial-time"></div>
                            </div>

                            <div class="msg-text" id="initial-time-bot">
                            Hi, welcome to NeedPlasma! Please let us know your full name. 😄
                            </div>
                        </div>
                    </div>

                    <div class="msg right-msg">
                        <div class="msg-img"
                            style="background-image: url(https://image.flaticon.com/icons/svg/145/145867.svg)">
                        </div>

                        <div class="msg-bubble">
                            <div class="msg-info">
                            <div class="msg-info-name">You</div>
                            <div class="msg-info-time initial-time"></div>
                        </div>

                        <div class="msg-text">
                        Type in your full name below
                        </div>
                    </div>
                    </div>
                </main>

                <form class="msger-inputarea">
                    <input type="text" class="msger-input" placeholder="Enter your message...">
                    <button type="submit" class="msger-send-btn">Send</button>
                </form>
        </section>
        </div>
    </div>
</div>


</main>

<?php
	include('internal/footer.php');
?>

<script>
const current_time = (new Date()).toLocaleTimeString();
$(".initial-time").html(current_time)

const msgerForm = get(".msger-inputarea");
const msgerInput = get(".msger-input");
const msgerChat = get(".msger-chat");

var step=1;

// Icons made by Freepik from www.flaticon.com
const BOT_IMG = "https://image.flaticon.com/icons/svg/327/327779.svg";
const PERSON_IMG = "https://image.flaticon.com/icons/svg/145/145867.svg";
const BOT_NAME = "NeedPlasma";
const PERSON_NAME = "Vandan Kumbhat";

msgerForm.addEventListener("submit", event => {
  event.preventDefault();

  const msgText = msgerInput.value;
  if (!msgText) return;

  appendMessage(PERSON_NAME, PERSON_IMG, "right", msgText);
  msgerInput.value = "";

  botResponse(msgText);
});

function appendMessage(name, img, side, text) {
  //   Simple solution for small apps
  const msgHTML = `
    <div class="msg ${side}-msg">
      <div class="msg-img" style="background-image: url(${img})"></div>

      <div class="msg-bubble">
        <div class="msg-info">
          <div class="msg-info-name">${name}</div>
          <div class="msg-info-time">${formatDate(new Date())}</div>
        </div>

        <div class="msg-text">${text}</div>
      </div>
    </div>
  `;

  msgerChat.insertAdjacentHTML("beforeend", msgHTML);
  msgerChat.scrollTop += 500;
}

function botResponse(msg) {

    //Send msg to server and get response
  const sendMsgToServer(msg, step);

  //const msgText = BOT_MSGS[r];
  const msgText= "Hello Vandan, let's begin registeration process. What's your age in years?";
  const delay = msgText.split(" ").length * 100;

  setTimeout(() => {
    appendMessage(BOT_NAME, BOT_IMG, "left", msgText);
  }, delay);
}

// Utils
function get(selector, root = document) {
  return root.querySelector(selector);
}

function formatDate(date) {
  const h = "0" + date.getHours();
  const m = "0" + date.getMinutes();

  return `${h.slice(-2)}:${m.slice(-2)}`;
}

function random(min, max) {
  return Math.floor(Math.random() * (max - min) + min);
}

</script>

  </body>
</html>