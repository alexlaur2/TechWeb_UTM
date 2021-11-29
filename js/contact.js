const submit = document.querySelector(".submit");
const email = document.querySelector("#email")
const username = document.querySelector("#username")
const text_contact = document.querySelector("#text_contact")
const emailPattern = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
const userPattern =/^[a-zA-Z]+([\s][a-zA-Z]+)*$/
const textPattern =/^.{1,300}$/

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

username.addEventListener('focusin', () => {
    username.addEventListener('keyup', () => {
    if (userPattern.test(username.value)) {
        username.style.borderColor = 'green'
    } 
    else {
        username.style.borderColor = 'red'
    }
    })
})

text_contact.addEventListener('focusin', () => {
    text_contact.addEventListener('keyup', () => {
    if (textPattern.test(text_contact.value)) {
        text_contact.style.borderColor = 'green'
    } 
    else {
        text_contact.style.borderColor = 'red'
    }
    })
})