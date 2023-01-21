const form = document.querySelector('.card-form');
const username = document.getElementById('user-name');
const email = document.getElementById('email');
const password = document.getElementById('password');
const confirm_password = document.getElementById('confirm-password');

form.addEventListener('submit', (e) => {
    e.preventDefault();

    checkInputs();
});