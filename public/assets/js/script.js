// Scroller Connected To Header

const header = document.querySelector("header");

window.onscroll = function () {
    var top = window.scrollY;
    console.log(top);
    if (top >= 50) {
        header.classList.add("active");
    } else {
        header.classList.remove("active");
    }
};

// JS Transition Between Sign Up and Login

const signUpButton = document.getElementById("signUp");
const signInButton = document.getElementById("signIn");
const container = document.getElementById("container");

signUpButton.addEventListener("click", () => {
    container.classList.add("right-panel-active");
});
signInButton.addEventListener("click", () => {
    container.classList.remove("right-panel-active");
});
