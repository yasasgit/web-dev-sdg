//signin.php
function signin() {
    let email = document.sign_in.email.value;
    let password = document.sign_in.password.value;

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
    // if (!email.includes("@", ".")) {
    //     alert("Not a valid e-mail address");
    // }
    return false;
}

//signup.php
function signup() {
    let account_type = document.signup.account_type.value;
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
    if (account_type === "" || firstname === "" || lastname === "" || dob === "" || gender === "" || country === "Select Country" || phone === "" || email === "" || password === "" || confirm_password === "") {
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

//contactus.php
function contact() {
    let Name = document.contact.Name.value;
    let Email = document.contact.Email.value;
    let Phone_Number = document.contact.Phone_Number.value;
    let Message = document.contact.Message.value;

    // validation fails if the input is blank
    if (Name === "" || Email === "" || Phone_Number === "" || Message === "") {
        alert("Error: Input is empty!");
        return false;
    }
    // validate email 
    if (!Email.includes("@", ".")) {
        alert("Not a valid e-mail address");
        return false;
    }

    // validate phone number
    if (isNaN(Phone_Number || Phone_Number !== 10)) {
        alert("Not a valid phone number");
        return false;
    }

}

//innovate.php
function addinno() {
    var firstname = document.addinno.firstname.value;
    if (firstname === "") {
        alert("Error: Input is empty!");
        return false;
    }
}

//investreg.php
function investreg() {
    var firstname = document.investreg.firstname.value;
    var lastname = document.investreg.lastname.value;
    var address1 = document.investreg.address1.value;
    var address2 = document.investreg.address2.value;
    var company_name = document.investreg.company_name.value;
    var email = document.investreg.email.value;
    var investment_type = document.investreg.investment_type.value;
    var investment_stage = document.investreg.investment_stage.value;
    var invest_amount = document.investreg.invest_amount.value;
    var agree = document.investreg.agree.value;


    // validation fails if the input is blank
    if (firstname === "" || lastname === "" || address1 === "" || address2 === "" || company_name === "" || email === "" ||
        investment_type === "Select investment_type" || investment_stage === "Select investment_stage" || invest_amount === "Select invest_amount") {
        alert("Error: Input is empty!");
        return false;
    }
    if (!email.includes("@", ".")) {
        alert("Not a valid e-mail address");
        return false;

        if (!this.investreg.agree.checked) {
            alert('You must agree to the terms first.');
            return false;
        }

    }
}

//startup.php
function startupapply() {
    let Name = document.startupapply.Name.value;
    let email = document.startupapply.email.value;
    let district = document.startupapply.discrict.value;
    let Business_Sector = document.startupapply.Business_Sector.value;
    let modal = document.getElementById("modal").value;
    // validation fails if the input is blank
    if (Name === "" ||
        email === "" ||
        district === "Select district" || Business_Sector === "select Business_sector") {
        alert("Error: Input is empty!");
        return false;
    }
}

//stats.php
function getinfo() {

}

//zone.php
function resetpw() {
    var oldP = document.getElementById("oldP").value;
    var newP = document.getElementById("newP").value;
    var confirmP = document.getElementById("confirmP").value;

    if (oldP !== "" && newP !== "" && confirmP !== "") {
        if (oldP !== newP) {
            if (newP === confirmP) {
                return true;
            } else {
                alert("Confirm password is not same as you new password.");
                return false;
            }
        } else {
            alert(" This Is Your Old Password,Please Provide A New Password");
            return false;
        }
    } else {
        alert("All Fields Are Required");
        return false;
    }
}
