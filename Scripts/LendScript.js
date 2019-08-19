
var brand = document.getElementById('brand');
var item = document.getElementById('item');
var error = document.getElementById('error');

// Must check that neither the brand and item are empty
function itemCheck() {
    if(brand.value == "" || item.value == "") {
        error.innerHTML = "Brand and item must be filled out";
        if(brand.value == "")  { brand.style = 'border-color : red' }
        if(item.value == "")  { item.style = 'border-color : red' }
        
        return false;
    }
}