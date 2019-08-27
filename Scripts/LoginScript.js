
var fname = document.getElementById('fname');
var lname = document.getElementById('lname');
var user = document.getElementById('user');
var pass = document.getElementById('pass');

var errorForm = document.getElementById('errorForm');
var userErr = document.getElementById('userErr');
var passErr = document.getElementById('passErr');

var isError = false;

function signInCheck() {

    // Reset styles
    { fname.style = 'border-color: none'; lname.style = 'border-color: none';
    user.style = 'border-color: none'; pass.style = 'border-color: none'; 
    errorForm.textContent = ""; userErr.textContent = ""; passErr.textContent = ""; 
    errorForm.textContent = ""; 
    isError = false; }

    {
    // 1.) No empties allowed
    if(fname.value == "" || lname.value == "" || user.value == "" || pass.value == "") {
        if(fname.value == "")  { fname.style = 'border-color : red' }
        if(lname.value == "")  { lname.style = 'border-color : red' }
        if(user.value == "")  { user.style = 'border-color : red' }
        if(pass.value == "")  { pass.style = 'border-color : red' }
        errorForm.textContent = "Form missing element(s)";
        isError = true; }

    // 2.) Username must not exist
    // For testing, this will only trigger if username == username
    if(user.value == "username") {
        user.style = 'border-color : red';
        userErr.textContent = "Username already exists";
        isError = true; }

    // 3.) Password must have one special, one #, and be 8-24 chars
    // For testing, only using 8-24 chars
    if(pass.value.length < 8 || pass.value.length > 24) {
        pass.style = 'border-color : red';
        passErr.textContent = "Password must be 8-24 chars"; 
        isError = true; } 
    }

    // If there is an error, flag the form and return false
    // otherwise, return true
    return !isError;
}   