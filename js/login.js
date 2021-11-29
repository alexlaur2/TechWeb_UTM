const login = document.querySelector(".login");
const password = document.querySelector('#password');
const email = document.querySelector("#email")
const format_pass = document.querySelector(".format_pass");
const passwordPattern = /^[!@#$%^&*a-zA-Z0-9]{5,15}$/
const emailPattern = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

password.addEventListener('focusin', () => {
    format_pass.style.display = 'block';

    password.addEventListener('keyup', () => {
    if (passwordPattern.test(password.value)) {
        password.style.borderColor = 'green' 
        format_pass.style.color = 'green'
    } 
    else {
        password.style.borderColor = 'red'
        format_pass.style.color = 'red'
    }
    })
})

password.addEventListener('focusout', () => {
    format_pass.style.display = 'none';
})

email.addEventListener('focusin', () => {
    email.addEventListener('keyup', () => {
    if (emailPattern.test(email.value)) {
        email.style.borderColor = 'green'
    } 
    else {
        email.style.borderColor = 'red'
    }
    })
})