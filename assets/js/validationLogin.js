const email = document.querySelector('#email');
const password = document.querySelector('#password');

const form = document.querySelector('.card-form');


form.addEventListener("submit", (e) => {
    var index = 0;
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
    if (index > 0) {
        e.preventDefault();
    }

});