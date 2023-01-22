const form                = document.querySelector('.card-form');
const username            = document.getElementById('user-name');
const email               = document.getElementById('email');
const password            = document.getElementById('password');
const confirm_password    = document.getElementById('confirm-password');

form.addEventListener("submit", (e) => {
    var index = 0;
    if (username.value === "") {
        index++;
        showError(username, "Username can't be blank");
    } else {
        username.classList.remove("is-invalid")
        username.classList.add("is-valid");
        document.getElementById('username-validation').innerText = "";
    }
    if (email.value === "") {
        index++;
        // showError(email, "Adress email is required");
    } else {
        email.classList.remove("is-invalid")
        email.classList.add("is-valid");
        document.getElementById('email-validation').innerText = "";
    }

    if (password.value === "") {
        index++;
        // showError(password, "Password can't be blank");
    } else {
        password.classList.remove("is-invalid")
        password.classList.add("is-valid");
        document.getElementById('password-validation').innerText = "";
    }

    if (confirm_password.value === "" || confirm_password.value !== password.value) {
        index++;
        // showError(confirm_password, "Passwords doesn't match !!");
    } else {
        passwordConfirmed.classList.remove("is-invalid")
        passwordConfirmed.classList.add("is-valid");
        document.getElementById('confpassword-validation').innerHTML = "";
    }
    if (index > 0) {
        e.preventDefault();
    }

});

function showError(input, message){
    const formField = input.parentElement;
    input.classList.remove('is-valid');
    input.classList.add('is-invalid');

    const error = formField.querySelector('small');
    error.textContent = message;
};