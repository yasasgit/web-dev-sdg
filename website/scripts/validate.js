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
    let account_type = document.sign_up.account_type.value;
    let firstname = document.sign_up.firstname.value;
    let lastname = document.sign_up.lastname.value;
    let dob = document.sign_up.dob.value;
    let gender = document.sign_up.gender.value;
    let country = document.sign_up.country.value;
    let phone = document.sign_up.phone.value;
    let email = document.sign_up.email.value;
    let password = document.sign_up.password.value;
    let confirm_password = document.sign_up.confirm_password.value;


    // validation fails if the input is blank
    if (account_type === "" || firstname === "" || lastname === "" || dob === "" || gender === "" || country === "Select Country" || phone === "" || email === "" || password === "" || confirm_password === "") {
        alert("A field is empty.");
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
function contactVali() {
    let fullname = document.contact.fullname.value;
    let email = document.contact.email.value;
    let phone = document.contact.phone.value;
    let message = document.contact.message.value;

    // validation fails if the input is blank
    if (fullname === "" || email === "" || phone === "" || message === "") {
        alert("Error:An Input is empty!");
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
function addinnoVali() {
    let firstname = document.addinnovation.firstname.value;
    let lastname = document.addinnovation.lastname.value;
    let innovation_1 = document.addinnovation.innovation_1.value;
    let innovation_2 = document.addinnovation.innovation_2.value;
    let innovation_3 = document.addinnovation.innovation_3.value;
    if (firstname === "" || lastname === "" || innovation_1 === "" || innovation_2 === "" || innovation_3 === "") {
        alert("Error:An Input is empty!");
        return false;
    }
}

//investreg.php
function investregVali() {
    let firstname = document.invest_reg.firstname.value;
    let lastname = document.invest_reg.lastname.value;
    let address1 = document.invest_reg.address1.value;
    let address2 = document.invest_reg.address2.value;
    let company_name = document.invest_reg.company_name.value;
    let email = document.invest_reg.email.value;
    let investment_type = document.invest_reg.investment_type.value;
    let investment_stage = document.invest_reg.investment_stage.value;
    let invest_amount = document.invest_reg.invest_amount.value;


    // validation fails if the input is blank
    if (firstname === "" || lastname === "" || address1 === "" || address2 === "" || company_name === "" || email === "" ||
        investment_type === "Select investment_type" || investment_stage === "Select investment_stage" || invest_amount === "Select invest_amount") {
        alert("Error: Input is empty!");
        return false;
    }
    if (!email.includes("@", ".")) {
        alert("Not a valid e-mail address");
        return false;
    }

    if (!document.invest_reg.agree.checked) {
        alert('You must agree to the terms first.');
        return false;
    }
}

//startup.php
function startupapplyVali() {
    let Name = document.startup_apply.Name.value;
    let email = document.startup_apply.email.value;
    let district = document.startup_apply.discrict.value;
    let Business_Sector = document.startup_apply.Business_Sector.value;
    // validation fails if the input is blank
    if (Name === "" || email === "" || district === "Select District" || Business_Sector === "Select Business Sector") {
        alert("Error: Input is empty!");
        return false;
    }
}

//stats.php
function getinfoVali() {
    let district = document.get_info.district.value;
    let stream = document.get_info.stream.value;
    if (district === "0" || stream === "0") {
        alert("Input cannot be empty!");
        return false;
    }

}

//zone.php
function resetpwVali() {
    let oldP = document.reset_pw.old_password.value;
    let newP = document.reset_pw.new_password.value;
    let confirmP = document.reset_pw.confirm_password.value;

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
