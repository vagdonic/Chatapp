const form = document.querySelector(".login form"),
continueBtn = form.querySelector(".button input"),
errorText = form.querySelector(".error-text");

form.onsubmit = (e) => {
    e.preventDefault(); //preventing form from submitting.
}

continueBtn.onclick = () => {
    //ajax start
    let xhr = new XMLHttpRequest(); //xml object creation.
    xhr.open("POST", "php/login.php", true);
    xhr.onload = () => {
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                if(data == "success"){
                    location.href = "users.php";
                }else{
                    errorText.textContent = data;
                    errorText.style.display =  "block";
                }
            }
        }
    }
    // sending form data using ajax to php.
    let formData = new FormData(form); //creating formData Object.
    xhr.send(formData);
}