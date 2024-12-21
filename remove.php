<?php

$id= $_GET['id'];
function removeFromCart($id)
{
    foreach ($_SESSION['cart'] as $key => $item) {
        if ($item['id'] == $id) {
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart'] = array_values($_SESSION['cart']); // Reindex array
            return;
        }
    }
}
