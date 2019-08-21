
var brand = document.getElementById('brand');
var item = document.getElementById('item');
var error = document.getElementById('error');

// Form conditions
// A. Neither the brand and item are empty
// B. No apostraphe's included in the listing
function itemCheck() {
    if(brand.value == "" || item.value == "") {

        if(brand.value == "")  { brand.style = 'border-color : red' }
        if(item.value == "")  { item.style = 'border-color : red' }
        error.textContent = "Form missing element(s)";

        return false; }

    if(brand.value.includes("m")){

        error.textContent = "m";

        return false; }

    else { return true; }
}   