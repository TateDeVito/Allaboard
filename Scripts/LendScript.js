
var brand = document.getElementById('brand');
var item = document.getElementById('item');
var sport = document.getElementById('sport');
var error = document.getElementById('error');

var isError = false;

// Form conditions
function itemCheck() {

    // Reset styles
    { brand.style = 'border-color: none'; item.style = 'border-color: none';
    sport.style = 'border-color: none'; error.textContent = ""; 
    isError = false; }

    // No apostraphes allowed
    if(brand.value.includes("'") || item.value.includes("'")) {
        // if(brand.value.includes("'")) { brand.value = brand.value.replace("'",""); }
        // if(item.value.includes("'")) { item.value = item.value.replace("'",""); }
        error.textContent = "Please replace apostraphes (') with empty spaces";        
        isError = true;
    }

    // No empties allowed
    if(brand.value == "" || item.value == "" || sport.value == "") {
        if(brand.value == "")  { brand.style = 'border-color : red' }
        if(item.value == "")  { item.style = 'border-color : red' }
        if(sport.value == "")  { sport.style = 'border-color : red' }
        error.textContent = "Form missing element(s)";
        isError = true;
    }

    return !isError;
}   