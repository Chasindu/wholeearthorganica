<?php
session_start();

// Database configuration
$host = 'localhost';
$db = 'organica';
$user = 'xcopet_juice';
$password = 'fEa7UiyN8l_qi62L';

// Connect to the database securely with PDO
try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false,
    ]);
} catch (PDOException $e) {
    error_log("Connection error: " . $e->getMessage());
    die("Database connection failed!");
}


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



// Process login form submission

?>
<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Login</title>
</head>
<body>
    <h1>Login</h1>
    <form method="POST" action="">
        <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br>
        <button type="submit">Login</button>
    </form>
</body>
</html> -->
