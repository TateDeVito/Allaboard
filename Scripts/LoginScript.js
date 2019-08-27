
var fName = document.getElementById('fName');
var lName = document.getElementById('lName');
var user = document.getElementById('user');
var pass = document.getElementById('pass');

var errorForm = document.getElementById('errorForm');
var userErr = document.getElementById('userErr');
var passErr = document.getElementById('passErr');

var isError = false;

function signInCheck() {

    // Reset styles
    { fName.style = 'border-color : none'; lName.style = 'border-color : none';
    user.style = 'border-color : none'; pass.style = 'border-color : none'; 
    errorForm.textContent = ""; userErr.textContent = ""; passErr.textContent = ""; 
    errorForm.textContent = ""; }

    // 1.) No empties allowed
    if(fName.value == "" || lName.value == "" || user.value == "" || pass.value == "") {
        if(fName.value == "")  { fName.style = 'border-color : red' }
        if(lName.value == "")  { lName.style = 'border-color : red' }
        if(user.value == "")  { user.style = 'border-color : red' }
        if(pass.value == "")  { pass.style = 'border-color : red' }
        errorForm.textContent = "Form missing element(s)";
        isError = true;
    }

    // 2.) Username must not exist
    // For testing, this will only trigger if username == username
    if(user.value == "username") {
        user.style = 'border-color : red';
        userErr.textContent = "Username already exists";
        isError = true;
    }

    // 3.) Password must have one special, one #, and be 8-24 chars
    // For testing, only using 8-24 chars
    if(pass.value.length < 8 || pass.value.length > 24) {
        pass.style = 'border-color : red';
        passErr.textContent = "Password must be 8-24 chars"; 
        isError = true;
    }

    // If there is an error, flag the form and return false
    if(isError) { return false; }
    else { return true; }

}   