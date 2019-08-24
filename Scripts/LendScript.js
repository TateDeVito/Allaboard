
var brand = document.getElementById('brand');
var item = document.getElementById('item');
var sport = document.getElementById('sport');
var error = document.getElementById('error');

// Form conditions
function itemCheck() {

    error.textContent = "";

    // No apostraphes allowed
    if(brand.value.includes("'") || item.value.includes("'")) {
        // if(brand.value.includes("'")) { brand.value = brand.value.replace("'",""); }
        // if(item.value.includes("'")) { item.value = item.value.replace("'",""); }
        error.textContent = "Please replace apostraphes (') with empty spaces";        
        return false;
    }

    // No empties allowed
    if(brand.value == "" || item.value == "" || sport.value == "") {
        if(brand.value == "")  { brand.style = 'border-color : red' }
        if(item.value == "")  { item.style = 'border-color : red' }
        if(sport.value == "")  { sport.style = 'border-color : red' }
        error.textContent = "Form missing element(s)";
        return false;
    }

    return true;

}   