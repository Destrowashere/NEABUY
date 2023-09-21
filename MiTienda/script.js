// Lista de productos
const products = [
    { id: 1, name: 'Producto 1', price: 10.99 },
    // Agrega los otros productos aquí
];

// Carrito de compras
const cart = [];

// Función para agregar un producto al carrito
function addToCart(productId) {
    const product = products.find(p => p.id === productId);
    if (product) {
        cart.push(product);
        updateCart();
    }
}

// Función para actualizar el carrito
function updateCart() {
    const cartItems = document.getElementById('cart-items');
    const cartTotal = document.getElementById('cart-total');

    cartItems.innerHTML = '';
    let total = 0;

    cart.forEach(item => {
        const listItem = document.createElement('li');
        listItem.className = 'cart-item';
        listItem.innerHTML = `${item.name} - $${item.price}`;
        cartItems.appendChild(listItem);
        total += item.price;
    });

    cartTotal.textContent = `$${total.toFixed(2)}`;
}

// Event listeners para botones de agregar al carrito
const addToCartButtons = document.querySelectorAll('.add-to-cart');
addToCartButtons.forEach(button => {
    button.addEventListener('click', () => {
        const productId = parseInt(button.getAttribute('data-product-id'));
        addToCart(productId);
    });
});

// Event listener para el botón de pago
const checkoutButton = document.getElementById('checkout-button');
checkoutButton.addEventListener('click', () => {
    alert('Proceso de pago no implementado en este ejemplo.');
});
