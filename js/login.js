const wrapper = document.querySelector(".wrapper");
const loginLink = document.querySelector(".login-link");
const registerLink = document.querySelector(".register-link");
const buttonPopup = document.querySelector(".button-popup");
const iconClose = document.querySelector(".icon-close");

registerLink.addEventListener("click", () => {
	wrapper.classList.add("active");
});

loginLink.addEventListener("click", () => {
	wrapper.classList.remove("active");
});

buttonPopup.addEventListener("click", () => {
	wrapper.classList.add("active-popup");
});

iconClose.addEventListener("click", () => {
	console.log('Clicked');
	wrapper.classList.remove("active-popup");
});
