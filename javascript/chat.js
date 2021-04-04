const form = document.querySelector(".typing-area"),
inputField = document.querySelector(".input-field"),
sendBtn = document.querySelector("button"),
chatBox = document.querySelector(".chat-box");

form.onsubmit = (e) => {
    e.preventDefault(); //preventing form from submitting.
}

sendBtn.onclick = () => {
        //ajax start
        let xhr = new XMLHttpRequest(); //xml object creation.
        xhr.open("POST", "php/insert-chat.php", true);
        xhr.onload = () => {
            if(xhr.readyState === XMLHttpRequest.DONE){
                if(xhr.status === 200){
                    inputField.value = ""; // once msg is sent, make the input field blank!
                    ScrollToBottom();
                }
            }
        }
        // sending form data using ajax to php.
        let formData = new FormData(form); //creating formData Object.
        xhr.send(formData); // sending data to php. 
}

chatBox.onmouseenter = () => {
    chatBox.classList.add("active");
}

chatBox.onmouseleave = () => {
    chatBox.classList.remove("active");
}

setInterval(() => {
    //ajax start
    let xhr = new XMLHttpRequest(); //xml object creation.
    xhr.open("POST", "php/get-chat.php", true);
    xhr.onload = () => {
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                chatBox.innerHTML = data;
                if(!chatBox.classList.contains("active")){
                    ScrollToBottom();
                }
            }
        }
    }
    // sending form data using ajax to php.
    let formData = new FormData(form); //creating formData Object.
    xhr.send(formData); // sending data to php.
}, 500); // this func will constantly run after 500ms.

function ScrollToBottom(){
    chatBox.scrollTop = chatBox.scrollHeight;
}