function checkForm() {
    var email = document.form.email.value;
    var password = document.form.password.value;

// validation fails if the input is blank
    if (email === "" || password === "") {
        alert("Error: Input is empty!");
        return false;
    }
// validate email 
    if (!email.includes("@", ".")) {
        alert("Not a valid e-mail address");
        return false;
    }

//incorrect password
    //if (password != confirmpassword)
    {
        alert("incorrect password");
        return false;
    }
}