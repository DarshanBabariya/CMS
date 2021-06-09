var fname = document.getElementById("fname");
var lname = document.getElementById("lname");
var email = document.getElementById("email");
var pwd1 = document.getElementById("pwd1");
var pwd2 = document.getElementById("pwd2");
var error = document.getElementById("error");

fname.onkeyup = function(){
    let alphabate = /^[A-Za-z]+$/;


    if(fname.value.match(alphabate)){
        error.style.display = "none";
    }
    else{
        error.innerHTML = "First Name Contain only alphabate.";
        error.style.display = "block";
    }
}
lname.onkeyup = function(){
    let alphabate = /^[A-Za-z]+$/;


    if(lname.value.match(alphabate)){
        error.style.display = "none";
    }
    else{
        error.innerHTML = "Last Name Contain only alphabate.";
        error.style.display = "block";
    }
}
email.onkeyup = function(){
    let email_val = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/;


    if(email.value.match(email_val)){
        error.style.display = "none";
    }
    else{
        error.innerHTML = "Enter specific email address.";
        error.style.display = "block";
    }
}
pwd1.onkeyup = function(){
    let pwd_val = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/;

    if(pwd1.value.match(pwd_val)){
        error.style.display = "none";
    }
    else{
        error.innerHTML = "Your password must be atleast 6 characters long, contain letters, numbers and  special characters and it must not contain spaces or emoji.";
        error.style.display = "block";
    }
}
pwd2.onkeyup = function(){
    if (pwd1.value != pwd2.value) {
        error.innerHTML = "Your password did not matched with current one.";
        error.style.display = "block";
    }
    else {
        error.style.display = "none";
    }
}