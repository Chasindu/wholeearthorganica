<?php
session_start();

// Functions for cart management (same as before)
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

function addToCart($id, $name, $price, $quantity) {
    foreach ($_SESSION['cart'] as &$item) {
        if ($item['id'] == $id) {
            $item['quantity'] += $quantity;
            return;
        }
    }
    $_SESSION['cart'][] = [
        'id' => $id,
        'name' => $name,
        'price' => $price,
        'quantity' => $quantity,
    ];
}

function removeFromCart($id) {
    foreach ($_SESSION['cart'] as $key => $item) {
        if ($item['id'] == $id) {
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart'] = array_values($_SESSION['cart']);
            return;
        }
    }
}

function updateCartQuantity($id, $quantity) {
    foreach ($_SESSION['cart'] as &$item) {
        if ($item['id'] == $id) {
            $item['quantity'] = $quantity;
            return;
        }
    }
}

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add_id'])) {
        addToCart($_POST['add_id'], $_POST['name'], $_POST['price'], $_POST['quantity']);
    }

    if (isset($_POST['remove_id'])) {
        removeFromCart($_POST['remove_id']);
    }

    if (isset($_POST['update_id']) && isset($_POST['quantity'])) {
        updateCartQuantity($_POST['update_id'], $_POST['quantity']);
    }
}

// Display cart
function displayCart() {
    if (empty($_SESSION['cart'])) {
        echo "<p>Your cart is empty.</p>";
        return;
    }

    $totalAmount = 0;
    $totalItems = 0;

    echo "<table border='1'>";
    echo "<tr><th>Name</th><th>Price</th><th>Quantity</th><th>Total</th><th>Actions</th></tr>";

    foreach ($_SESSION['cart'] as $item) {
        $itemTotal = $item['price'] * $item['quantity'];
        $totalAmount += $itemTotal;
        $totalItems += $item['quantity'];

        echo "<tr>";
        echo "<td>" . htmlspecialchars($item['name']) . "</td>";
        echo "<td>" . htmlspecialchars(number_format($item['price'], 2)) . "</td>";
        echo "<td>" . htmlspecialchars($item['quantity']) . "</td>";
        echo "<td>" . htmlspecialchars(number_format($itemTotal, 2)) . "</td>";
        echo "<td>
                <form method='POST' style='display:inline;'>
                    <input type='hidden' name='remove_id' value='" . $item['id'] . "'>
                    <button type='submit'>Remove</button>
                </form>
                <form method='POST' style='display:inline;'>
                    <input type='hidden' name='update_id' value='" . $item['id'] . "'>
                    <input type='number' name='quantity' value='" . $item['quantity'] . "' min='1'>
                    <button type='submit'>Update</button>
                </form>
              </td>";
        echo "</tr>";
    }

    echo "</table>";

    echo "<h3>Cart Summary</h3>";
    echo "<p>Total Items: " . htmlspecialchars($totalItems) . "</p>";
    echo "<p>Total Amount: $" . htmlspecialchars(number_format($totalAmount, 2)) . "</p>";

    // Proceed to checkout
    echo "<a href='checkout.php'><button>Proceed to Checkout</button></a>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
</head>
<body>
    <h1>Shopping Cart</h1>

    <h2>Products</h2>
    <form method="POST" action="">
        <input type="hidden" name="add_id" value="1">
        <input type="hidden" name="name" value="Apple">
        <input type="hidden" name="price" value="1.5">
        <label>Apple - $1.50</label>
        <input type="number" name="quantity" value="1" min="1">
        <button type="submit">Add to Cart</button>
    </form>

    <form method="POST" action="">
        <input type="hidden" name="add_id" value="2">
        <input type="hidden" name="name" value="Banana">
        <input type="hidden" name="price" value="0.5">
        <label>Banana - $0.50</label>
        <input type="number" name="quantity" value="1" min="1">
        <button type="submit">Add to Cart</button>
    </form>

    <h2>Your Cart</h2>
    <?php displayCart(); ?>
</body>
</html>
