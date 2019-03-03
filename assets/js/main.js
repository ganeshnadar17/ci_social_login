function onReady(yourMethod) {
    var readyStateCheckInterval = setInterval(function () {
        if (document && document.readyState === 'complete') { // Or 'interactive'
            clearInterval(readyStateCheckInterval);
            yourMethod();
        }
    }, 10);
}

var test_html = ` 
<style>
.modal {
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    opacity: 0;
    visibility: hidden;
    transform: scale(1.1);
    transition: visibility 0s linear 0.25s, opacity 0.25s 0s, transform 0.25s;
}
.modal-content {
    position: absolute;
    top: 80%;
    left: 80%;
    transform: translate(-50%, -50%);
    background-color: white;
    padding: 0.5rem 0.5rem;
    width: 25rem;
    border-radius: 0.25rem;
}
.close-button {
    float: right;
    width: 1.5rem;
    line-height: 1rem;
    margin-top:0.5rem;
    text-align: center;
    cursor: pointer;
    border-radius: 0.5rem;
    background-color: #D76339;
}
.close-button:hover {
    background-color: darkgray;
}
.show-modal {
    opacity: 1;
    visibility: visible;
    transform: scale(1.0);
    transition: visibility 0s linear 0s, opacity 0.25s 0s, transform 0.25s;
}
.hide {
    display: none;
}

</style>

<button class="trigger hide">Subscribe!</button>

  <div class="modal">
      <div class="modal-content">
          <span class="close-button">X</span>

          <div class="simple-subscription-form" style="background: #d76339; color: #fefefe; padding: 2rem; border-radius: 0;">
        <form>
            <h4>Subscribe</h4>
            <p>Receive updates and latest news direct from our team. Simply enter your email below :</p>
            <div class="input-group">
            <span class="input-group-label">
                <i class="fa fa-envelope"></i>
            </span>
            <input class="input-group-field" type="email" placeholder="Email" required>
            <button class="button" style="margin-bottom: 0; border-radius: 0 0 0 0; background-color: #222222">Sign up now</button>
        </form>
        </div>

      </div>
  </div>
  `


// use like
onReady(function () {
    appendHtml(document.body, test_html);
    window.modal = document.querySelector(".modal");
    var trigger = document.querySelector(".trigger");
    var closeButton = document.querySelector(".close-button");

    trigger.addEventListener("click", toggleModal);
    closeButton.addEventListener("click", toggleModal);
    // window.addEventListener("click", windowOnClick);
    
    setTimeout(() => {
        toggleModal();
    }, 3000)

});

function appendHtml(el, str) {
    var div = document.createElement('div');
    div.innerHTML = str;
    while (div.children.length > 0) {
        el.appendChild(div.children[0]);
    }
}

function toggleModal() {
    window.modal.classList.toggle("show-modal");
}

function windowOnClick(event){
    toggleModal()
}