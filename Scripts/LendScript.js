
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

        brand.innerHTML = brand;
        item.innerHTML = item;

        return false;
    }

    // Ultimately, functionality for this will need to come in, but for now
    // it is causing failure
    // else if(brand.value.includes(" ")) {
    //     error.textContent = "Apostraphe";        
    //     return false;
    // }
}   