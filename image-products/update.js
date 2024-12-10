function addProduct() {
    const productName = prompt("Enter the product name:");
    const productPrice = parseFloat(prompt("Enter the product price:"));
    const productImage = prompt("Enter the product image URL:");

    if (!productName || isNaN(productPrice) || !productImage) {
        alert("Please enter valid inputs for all fields.");
        return;
    }

    alert(`Product added: \nName: ${productName} \nPrice: ${productPrice.toFixed(2)} \nImage: ${productImage}`);
    // Example: Send this data to the backend
    /*
    fetch('/addProduct', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ name: productName, price: productPrice, image: productImage })
    })
    .then(response => response.json())
    .then(data => console.log(data))
    .catch(error => console.error('Error:', error));
    */
}
