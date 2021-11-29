const signup = document.querySelector(".signup");
const password = document.querySelector('#password');
const firstName = document.querySelector('#firstName');
const lastName = document.querySelector('#lastName');
const confirmPassword = document.querySelector("#confirmPassword");
const email = document.querySelector("#email")
const format_pass = document.querySelector(".format_pass");
const format_pass_us = document.querySelector(".format_pass_us");
const passwordPattern = /^[!@#$%^&*a-zA-Z0-9]{5,15}$/
const emailPattern = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
const textPattern =/^[a-zA-Z]+([\s][a-zA-Z]+)*$/

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

confirmPassword.addEventListener('focusin', () => {
    format_pass.style.display = 'block';
    confirmPassword.addEventListener('keyup', () => {
        if (passwordPattern.test(confirmPassword.value) && password.value === confirmPassword.value) {
            confirmPassword.style.borderColor = 'green'
            format_pass.style.color = 'green'
            } 
        else {
             confirmPassword.style.borderColor = 'red'
             format_pass.style.color = 'red'
             }
        })
})

confirmPassword.addEventListener('focusout', () => {
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

firstName.addEventListener('focusin', () => {
	format_pass_us.style.display = 'block';
	
    firstName.addEventListener('keyup', () => {
    if (textPattern.test(firstName.value)) {
        firstName.style.borderColor = 'green'
		format_pass_us.style.color = 'green'
    } 
    else {
        firstName.style.borderColor = 'red'
		format_pass_us.style.color = 'red'

    }
    })
})

firstName.addEventListener('focusout', () => {
    format_pass_us.style.display = 'none';
})

lastName.addEventListener('focusin', () => {
	format_pass_us.style.display = 'block';
	
    lastName.addEventListener('keyup', () => {
    if (textPattern.test(lastName.value)) {
        lastName.style.borderColor = 'green'
		format_pass_us.style.color = 'green'
    } 
    else {
        lastName.style.borderColor = 'red'
		format_pass_us.style.color = 'red'

    }
    })
})

lastName.addEventListener('focusout', () => {
    format_pass_us.style.display = 'none';
})