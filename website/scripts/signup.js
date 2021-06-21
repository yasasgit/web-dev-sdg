function checkForm() {
    let firstname = document.signup.value;
    let lastname = document.signup.lastname.value;
    let dob = document.signup.dob.value;
    let gender = document.signup.gender.value;
    let country = document.signup.country.value;
    let email = document.signup.email.value;
    let phone = document.signup.phone.value;
    let username = document.signup.phone.value;
    let password = document.signup.password.value;
    let confirmpassword = document.signup.confirmpassword.value;


    // validation fails if the input is blank
    if (firstname === "" || lastname === "" || gender === "" || email === "" || phone === "" || password === "" || confirmpassword === "") {
        alert("Error: Input is empty!");
        return false;
    }

    // validation fails if the input is blank
    if (date === "Date" || month === "Month" || year === "Year" || country === "Country") {
        alert("Error: Input is empty!");
        return false;
    }

    // validate email 
    if (!email.includes("@", ".")) {
        alert("Not a valid e-mail address");
        return false;
    }

    // validate phone number
    if (isNaN(phone) || phone.length !== 10) {
        alert("Not a valid phone number");
        return false;
    }

    //validate password confirmation
    if (password !== confirmpassword) {
        alert("Pasword confirmation failed");
        return false;
    }

}
