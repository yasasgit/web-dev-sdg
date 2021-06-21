function checkForm() {
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
