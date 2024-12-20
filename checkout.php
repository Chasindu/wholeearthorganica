<?php
session_start();

if (empty($_SESSION['cart'])) {
    echo "Your cart is empty. Add items to proceed to checkout.";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get user details
    $name = $_POST['name'];
    $address = $_POST['address'];
    $payment_method = $_POST['payment_method'];

    // Save order to database (example, replace with real DB calls)
    require 'DB_CONN.php';
    $conn = getDatabaseConnection();

    $order_query = "INSERT INTO orders (name, address, payment_method) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($order_query);
    $stmt->bind_param('sss', $name, $address, $payment_method);
    $stmt->execute();

    // Get the order ID
    $order_id = $conn->insert_id;

    // Save items in the order
    foreach ($_SESSION['cart'] as $item_id => $qty) {
        $item_query = "INSERT INTO order_items (order_id, item_id, quantity) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($item_query);
        $stmt->bind_param('iii', $order_id, $item_id, $qty);
        $stmt->execute();
    }

    // Clear the cart
    $_SESSION['cart'] = [];

    echo "Order placed successfully! Your Order ID: $order_id";
    exit;
}
?>
<h2>Checkout</h2>
<form method="POST">
    <label>Name: <input type="text" name="name" required></label><br>
    <label>Address: <textarea name="address" required></textarea></label><br>
    <label>Payment Method:
        <select name="payment_method" required>
            <option value="Credit Card">Credit Card</option>
            <option value="PayPal">PayPal</option>
        </select>
    </label><br>
    <button type="submit">Place Order</button>
</form>
