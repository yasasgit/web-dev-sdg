function checkForm() {
    var firstname = document.form.firstname.value;
    var lastname = document.form.lastname.value;
    var dob = document.form.dob.value;
    var gender = document.form.gender.value;
    var country = document.form.country.value;
    var email = document.form.email.value;
    var phone = document.form.phone.value;
    var username = document.form.phone.value;
    var password = document.form.password.value;
    var confirmpassword = document.form.confirmpassword.value;


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
