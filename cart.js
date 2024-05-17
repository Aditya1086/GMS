
let bagItems;
let bagItemsStr = localStorage.getItem('bagItems');
bagItems = bagItemsStr ? JSON.parse(bagItemsStr) : [];
displayBagItemCount();


function addToCart(name) {
    bagItems.push(name);
    localStorage.setItem('bagItems', JSON.stringify(bagItems));
    displayBagItemCount();
}

function displayBagItemCount() {
    let bagItemCountElement = document.querySelector('.cart-count');
    if (bagItems.length > 0) {
        bagItemCountElement.style.visibility = 'visible';
        bagItemCountElement.innerText = bagItems.length;
    } else {
        bagItemCountElement.style.visibility = 'hidden';
    }
    // console.log(bagItems);
}
localStorage.removeItem('bagItems'); //Removing product
