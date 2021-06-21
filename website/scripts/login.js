function validate() {
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