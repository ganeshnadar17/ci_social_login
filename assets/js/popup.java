function onReady(yourMethod) {
    alert("test2");
    var readyStateCheckInterval = setInterval(function (){
        if (document && document.readyState === 'complete') { // Or 'interactive'
            clearInterval(readyStateCheckInterval);
            yourMethod();
        }
    }, 10);
}

var test_html = ` 
<style>
.modal_1 {
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
.modal-content_1 {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: white;
    padding: 0.5rem 0.5rem;
    width: 40rem;
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

// .button {
//     background-color: #222222;
//     border: none;
//     color: white;
//     padding: 15px 32px;
//     text-align: center;
//     text-decoration: none;
//     display: inline-block;
//     margin: 4px 2px;
//     cursor: pointer;
//     font-size: 16px;
// }

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

  <div class="modal_1">
      <div class="modal-content_1">
          <span class="close-button">X</span>

          <div class="simple-subscription-form" style="background: #d76339; color: #fefefe; padding: 2rem; border-radius: 0;">
        <form>
            <h2>SPECIAL DISCOUNT</h2>
            <p>Like us on Facebook and get 50% discount!</p>
            // <span class="input-group-label"><i class="fa fa-envelope"></i></span>
            <a class="btn btn-primary btn-lg" target="_blank" data-track="action" href="http://localhost/ci_social_login/"> Special OFFER</a>
            <p>Note</p>
        </form>
        </div>

      </div>
  </div>
  `


// use like
onReady(function (){
    appendHtml(document.body, test_html);
    window.modal = document.querySelector(".modal_1");
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
    alert("test3");
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