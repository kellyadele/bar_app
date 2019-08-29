var drinkArray = [];
function addItem(drink) {
    drinkArray.push(drink);
    document.getElementById("drinkList").value += drink + "\n";

}

function submitDrinks() {
    if(drinkArray[0] == null) {
        alert ("You must order at least one drink to submit order.");
    }
    
}   



