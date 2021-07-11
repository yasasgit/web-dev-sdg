//signin.php
function signInVali() {
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
function signUpVali() {
    // let account_type = document.sgnup.account_type.value;
    let firstname = document.sgnup.firstname.value;
    // let lastname = document.sgnup.lastname.value;
    // let dob = document.sgnup.dob.value;
    // let gender = document.sgnup.gender.value;
    // let country = document.sgnup.country.value;
    // let phone = document.sgnup.phone.value;
    // let email = document.sgnup.email.value;
    // let password = document.sgnup.password.value;
    // let confirm_password = document.sgnup.confirm_password.value;

    return firstname !== "";


    // validation fails if the input is blank
    // if (account_type === "" || firstname === "" || lastname === "" || dob === "" || gender === "" || country === "Select Country" || phone === "" || email === "" || password === "" || confirm_password === "") {
    //     return false;
    // }

    // if (password.length < 8) {
    //     alert("Password must have at least 8 characters.");
    //     return false;
    // }

    // validate phone number
    // if (isNaN(phone) || phone.length !== 10) {
    //     alert("Not a valid phone number");
    //     return false;
    // }

    //validate password confirmation
    // if (password !== confirm_password) {
    //     alert("Password confirmation failed");
    //     return false;
    // }
}

//contactus.php
function contact() {
    let fullname = document.contact.fullname.value;
    let email = document.contact.email.value;
    let phone = document.contact.phone.value;
    let message = document.message.value;

    // validation fails if the input is blank
    if (fullname === "" || email === "" || phone === "" || message === "") {
        alert("Error: Input is empty!");
        return false;
    }
    // validate email 
    if (!email.includes("@", ".")) {
        alert("Not a valid e-mail address");
        return false;
    }

    // validate phone number
    if (isNaN(phone) || (phone !== 10)) {
        alert("Not a valid phone number");
        return false;
    }

}

//innovate.php
function addinno() {
    let firstname = document.addinno.firstname.value;
    let lastname = document.addinno.lastname.value;
    let innovation_1 = document.addinno.innovation_1.value;
    let innovation_2 = document.addinno.innovation_2.value;
    let innovation_3 = document.addinno.innovation_3.value;
    if (firstname === "" || lastname === "" || innovation_1 === "" || innovation_2 === "" || innovation_3 === "") {
        alert("Error: Input is empty!");
        return false;
    }
}

//investreg.php
function investreg() {
    let firstname = document.investreg.firstname.value;
    let lastname = document.investreg.lastname.value;
    let address1 = document.investreg.address1.value;
    let address2 = document.investreg.address2.value;
    let company_name = document.investreg.company_name.value;
    let email = document.investreg.email.value;
    let investment_type = document.investreg.investment_type.value;
    let investment_stage = document.investreg.investment_stage.value;
    let invest_amount = document.investreg.invest_amount.value;
    let agree = document.investreg.agree.value;


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
    // validation fails if the input is blank
    if (Name === "" ||
        email === "" ||
        district === "Select district" || Business_Sector === "Select Business_sector") {
        alert("Error: Input is empty!");
        return false;
    }
}

//stats.php
function getinfo() {
    let district = document.getinfo.discrict.value;
    let stream = documnet.getinfo.stream.value;
    if (district === "Select district" || stream === "Select stream") {
        alert("cannot be empty!");
        return false;
    }

}

//zone.php
function resetpw() {
    let oldP = document.getElementById("oldP").value;
    let newP = document.getElementById("newP").value;
    let confirmP = document.getElementById("confirmP").value;

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
