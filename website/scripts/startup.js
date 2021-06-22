function checkForm() {
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
