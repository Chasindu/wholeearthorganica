<?php 
include 'DB_CONN.php';


// Generate CSRF token if not already set
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

//Ssanitize input
function sanitizeInput($input) {
    return htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Validate CSRF token    
    if (!hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
        die("Invalid CSRF token!");
    }



    if (isset($_POST['login'])) {

        $email = filter_var(sanitizeInput($_POST['email']), FILTER_SANITIZE_EMAIL);
        $password = sanitizeInput($_POST['password']);

        try {

            $stmt = $pdo->prepare("SELECT id, name, password FROM users WHERE userName = :email LIMIT 1");
            $stmt->bindParam(':email', $email);
            $stmt->execute();
    
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
            if ($user && password_verify($password, $user['password'])) {
                // Successful login
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_name'] = $user['name'];
                echo "Welcome, " . sanitizeInput($user['name']) . "!";
            } else {
                // Invalid credentials
                echo "Invalid email or password.";
            }
    
    
    
        } catch (PDOException $e) {
            error_log("Query error: " . $e->getMessage());
            die("An error occurred. Please try again.");
        }

    }

    // if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //     die("Invalid email format.");
    // }

   
}





?>