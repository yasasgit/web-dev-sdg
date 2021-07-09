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
    let Message =document.contact.Message.value;

    // validation fails if the input is blank
    if(Name == ""|| Email== "" || Phone_Number== "" || Message== "" ) 
    {
    	alert("Error: Input is empty!");
    	return false;
    }
    // validate email 
	if (!Email.includes("@",".")) 
	{
	    alert("Not a valid e-mail address");
	    return false;
    }   

	// validate phone number
	if (isNaN(Phone_Number || Phone_Number != 10) 
	{
	    alert("Not a valid phone number");
	    return false;
    }

}

//innovate.php
function addinno() {

}

//investreg.php
function investreg() {

}

//signin.php
function signin() {
    let email = document.signin.email.value;
    let password = document.signin.password.value;

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
    if (!email.includes("@", ".")) {
        alert("Not a valid e-mail address");
    }
    return false;
}

//startup.php
function startupapply() {
    let name = document.startupapply.name.value;
    let email = document.startupapply.email.value;
    let discrict = document.startupapply.discrict.value;
    // validation fails if the input is blank
    if (name == "" ||
        email == "" ||
        discrict == "Select discrict") {
        alert("Error: Input is empty!");
        return false;
    }
}

//stats.php
function getinfo() {

}

//zone.php
function resetpw() {

}

