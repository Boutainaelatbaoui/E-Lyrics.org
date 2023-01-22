const form                = document.querySelector('.card-form');
const username            = document.getElementById('user-name');
const email               = document.getElementById('email');
const password            = document.getElementById('password');
const confirm_password    = document.getElementById('confirm-password');


form.addEventListener("submit", (e) => {
    var index = 0;
    if (username.value === "") {
        index++;
        username.classList.add("is-invalid");
        document.getElementById('username-validation').innerHTML = "Username can't be blank";
    } else {
        username.classList.remove("is-invalid")
        username.classList.add("is-valid");
        document.getElementById('username-validation').innerText = "";
    }
    if (email.value === "") {
        index++;
        email.classList.add("is-invalid");
        document.getElementById('email-validation').innerText = "Adress email is required";
    } else {
        email.classList.remove("is-invalid")
        email.classList.add("is-valid");
        document.getElementById('email-validation').innerText = "";
    }

    if (password.value === "") {
        index++;
        password.classList.add("is-invalid");
        document.getElementById('password-validation').innerText = "Password can't be blank";
    } else {
        password.classList.remove("is-invalid")
        password.classList.add("is-valid");
        document.getElementById('password-validation').innerText = "";
    }

    if (confirm_password.value === "" || confirm_password.value !== password.value) {
        index++;
        confirm_password.classList.add("is-invalid");
        document.getElementById('confpassword-validation').innerHTML = "Passwords doesn't match !!";
    } else {
        confirm_password.classList.remove("is-invalid")
        confirm_password.classList.add("is-valid");
        document.getElementById('confpassword-validation').innerHTML = "";
    }
    if (index > 0) {
        e.preventDefault();
    }

});