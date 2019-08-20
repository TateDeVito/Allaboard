
var brand = document.getElementById('brand');
var item = document.getElementById('item');
var error = document.getElementById('error');
var btn = document.getElementById('list'); 

// Must check that neither the brand and item are empty
function itemCheck() {
    if(brand.value == "" || item.value == "") {

        if(brand.value == "")  { brand.style = 'border-color : red' }
        if(item.value == "")  { item.style = 'border-color : red' }

        error.innerHTML = "Form missing elements";
        brand.innerHTML = brand.value;
        brand.innerHTML = brand.value;

        return false;
    }
}