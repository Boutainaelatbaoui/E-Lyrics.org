const form     = document.querySelector('.card-form');
const username = document.getElementById('user-name');
const email    = document.getElementById('email');
const password = document.getElementById('password');
const confirm_password    = document.getElementById('confirm-password');


form.addEventListener("submit", (e) => {
    var index = 0;
    if (username.value === "") {
        index++;
        username.classList.add("is-invalid");
        document.getElementById('username-validation').innerText = "Username can't be blank";
    } else if (!username.value.match("^[A-Za-z][A-Za-z0-9_]{7,29}$")) {
        index++;
        username.classList.add("is-invalid");
        document.getElementById('username-validation').innerText = "Invalid Username";
    } else {
        username.classList.remove("is-invalid")
        username.classList.add("is-valid");
        document.getElementById('username-validation').innerText = "";
    }
    if (email.value === "") {
        index++;
        email.classList.add("is-invalid");
        document.getElementById('email-validation').innerText = "Adress email is required";
    } else if (!email.value.match("[a-z0-9]+@[a-z]+\.[a-z]{2,3}")) {
        index++;
        username.classList.add("is-invalid");
        document.getElementById('email-validation').innerText = "Invalid Email";
    } else {
        email.classList.remove("is-invalid")
        email.classList.add("is-valid");
        document.getElementById('email-validation').innerText = "";
    }

    if (password.value === "") {
        index++;
        password.classList.add("is-invalid");
        document.getElementById('password-validation').innerText = "Password can't be blank";
    } 
    // else if (!password.value.match("[a-z0-9]+@[a-z]+\.[a-z]{2,3}")) {
    //     index++;
    //     password.classList.add("is-invalid");
    //     document.getElementById('password-validation').innerText = "Invalid Password";
    // } 
    else {
        password.classList.remove("is-invalid")
        password.classList.add("is-valid");
        document.getElementById('password-validation').innerText = "";
    }
    // if ((passwordConfirmed.value === "" || passwordConfirmed.value == null) || passwordConfirmed.value !== password.value) {
    //     index++;
    //     passwordConfirmed.classList.add("is-invalid");
    //     errorPasswordConfirmed.innerHTML = "Passwords doesn't match !!";
    // } else {
    //     passwordConfirmed.classList.remove("is-invalid")
    //     passwordConfirmed.classList.add("is-valid");
    //     // errorPasswordConfirmed.innerHTML = "Looks Good !";
    // }
    if (index > 0) {
        e.preventDefault();
    }

});