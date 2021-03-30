const pwdField = document.querySelector(".form .field input[type='password']"),
toggleBtn = document.querySelector(".form .field i");

toggleBtn.onclick = () => {
	if(pwdField.type == "password"){
		pwdField.type = "text";
		toggleBtn.classList.add("active");
	}
	else{
		pwdField = "password";
		toggleBtn.classList.remove("active");
	}
}

const searchBar = document.querySelector(".users .search input"),
	searchBtn = document.querySelector(".users .search button");

searchBtn.onclick = () => {
	searchBar.classList.toogle("active");

