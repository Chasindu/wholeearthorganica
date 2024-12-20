<?php
session_start();

// Ensure the cart is initialized
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Add item to cart
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['item_id'])) {
    $item_id = $_POST['item_id'];
    $quantity = $_POST['quantity'] ?? 1;

    // Check if item is already in cart
    if (isset($_SESSION['cart'][$item_id])) {
        $_SESSION['cart'][$item_id] += $quantity;
    } else {
        $_SESSION['cart'][$item_id] = $quantity;
    }
    echo "Item added to cart successfully!";
}

// View cart items
echo "<h2>Your Shopping Cart</h2>";
if (!empty($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $id => $qty) {
        echo "Item ID: $id - Quantity: $qty <br>";
    }
} else {
    echo "Your cart is empty.";
}

// Option to clear cart
if (isset($_POST['clear_cart'])) {
    $_SESSION['cart'] = [];
    echo "Cart cleared!";
}
?>
<form method="POST">
    <button type="submit" name="clear_cart">Clear Cart</button>
</form>
