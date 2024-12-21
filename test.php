<?php

if (isset($_POST['update_stock'])) {

    $stmt = $pdo->prepare("UPDATE items SET qty = :qty, price= :price WHERE id = :id");
    $stmt->bindParam(':id', $_POST['update_id'], PDO::PARAM_INT);
    $stmt->bindParam(':qty', $_POST['qty']);
    $stmt->bindParam(':price', $_POST['price']);

    // Execute the query
    $stmt->execute();

}