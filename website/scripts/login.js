function validate() {
    var email = document.form.email.value;
    var password = document.form.password.value;

// validation fails if the input is blank
    if (email === "") {
        alert("email is empty!");
        return false;
    }
    if (password === "") {
        alert("password is empty!");
        return false;
    }
// validate email 
//     if (!email.includes("@", ".")) {
//         alert("Not a valid e-mail address");
//         return false;
//     }
}