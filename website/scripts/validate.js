//contactus.php
function contact() {

}
//innovate.php
function addinno() {

}
//investreg.php
function investreg() {

}
//signin.php
function signin() {
    let email = document.login.email.value;
    let password = document.login.password.value;

    if (email !== "" && password !== "") {
        return true;
    }
    if (password === "") {
        document.getElementById("password").style.color = "red";
    } else {
        document.getElementById("password").style.color = "black";
    }
    if (email === "") {
        document.getElementById("email").style.color = "red";
    } else {
        document.getElementById("email").style.color = "black";
    }
// validate email
//     if (!email.includes("@", ".")) {
//         alert("Not a valid e-mail address");
//     }
    return false;
}
//signup.php
function signup() {
    let acctype = document.signup.acctype.value;
    let firstname = document.signup.firstname.value;
    let lastname = document.signup.lastname.value;
    let dob = document.signup.dob.value;
    let gender = document.signup.gender.value;
    let country = document.signup.country.value;
    let phone = document.signup.phone.value;
    let email = document.signup.email.value;
    let password = document.signup.password.value;
    let confirm_password = document.signup.confirm_password.value;

    // validation fails if the input is blank
    if (firstname === ""
        || lastname === "" || gender === ""
        || email === "" || phone === ""
        || password === "" || confirm_password === ""
        || acctype === "" || dob === "" || country === "Select Country") {
        alert("Error: Input is empty!");
        return false;
    }

    if (password.length < 8) {
        alert("Password must have at least 8 characters.");
        return false;
    }

    // validate phone number
    if (isNaN(phone) || phone.length !== 10) {
        alert("Not a valid phone number");
        return false;
    }

    //validate password confirmation
    if (password !== confirm_password) {
        alert("Password confirmation failed");
        return false;
    }
}
//startup.php
function startupapply() {
    let name = document.startup.name.value;
    let email = document.startup.email.value;
    let discrict = document.startup.discrict.value;
    // validation fails if the input is blank
    if (name === "" ||
        email === "" ||
        discrict === "Select discrict") {
        alert("Error: Input is empty!");
        return false;
    }
}
//stats.php
function getinfo() {

}
//zone.php
function resetpw() {

}
//zone.php
function deleteacc() {

}

