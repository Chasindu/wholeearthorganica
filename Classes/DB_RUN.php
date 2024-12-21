<?php
include 'DB_CONN.php';
if (session_status() !== PHP_SESSION_ACTIVE)
    session_start();
// Generate CSRF token if not already set
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

//Ssanitize input
function sanitizeInput($input)
{
    return htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Validate CSRF token    
    // if (!hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
    //     die("Invalid CSRF token!");
    // }



    if (isset($_POST['login'])) {

        $email = filter_var(sanitizeInput($_POST['email']), FILTER_SANITIZE_EMAIL);
        $password = sanitizeInput($_POST['psw']);

        try {

            $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email LIMIT 1");
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($user && ($password == $user['psw'])) {
                // Successful login
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_name'] = $user['name'];
                $_SESSION['auth'] = $user['auth'];
                if ($_SESSION['auth'] == 'u') {
                    header("Location:../my-account.php");
                } else if ($_SESSION['auth'] == 's') {
                    header("Location:../my-account-seller.php");
                }
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



    if (isset($_POST['register'])) {

        $name = sanitizeInput($_POST['username']);
        $email = sanitizeInput($_POST['email']);
        $password = sanitizeInput($_POST['psw']);
        $address = sanitizeInput($_POST['address']);
        $user_type = sanitizeInput($_POST['user_type']);
        try {
            // Insert data into the `users` table
            $stmt = $pdo->prepare("INSERT INTO users (name, email, psw, address, auth) VALUES (:name, :email, :psw, :addr, :auth)");
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':psw', $password);
            $stmt->bindParam(':addr', $address);
            $stmt->bindParam(':auth', $user_type);

            if ($stmt->execute()) { {
                    header("Location:../login.php");
                }
            } else {
                echo "Failed to insert data.";
            }
        } catch (PDOException $e) {
            error_log("Insert error: " . $e->getMessage());
            die("An error occurred. Please try again.");
        }

    }

    if (isset($_POST['order'])) {


        foreach ($_SESSION['cart'] as $item) {
            echo $item['id'];
            echo $item['quantity'];

            try {
                // Prepare the SQL query
                $stmt = $pdo->prepare("UPDATE items SET qty = qty - :reduction WHERE id = :id");
                $stmt->bindParam(':reduction', $item['quantity'], PDO::PARAM_INT);
                $stmt->bindParam(':id', $item['id'], PDO::PARAM_INT);

                // Execute the query
               $stmt->execute() ;
            }


            catch (PDOException $e) {
                error_log("Query error: " . $e->getMessage());
                die("An error occurred. Please try again.");
            }

            $order_number = (rand(10, 100000));



            try {
                // $stmt = $pdo->prepare("INSERT INTO items (name, price, qty , seller_id ) VALUES (:name, :price, :qty, :seller_id)");
                $stmt = $pdo->prepare("INSERT INTO orders (rand_order_id	, cus_id, item, qty ) VALUES (:rand_order_id, :cus_id, :item, :qty)");

                $stmt->bindParam(':rand_order_id', $order_number);
                $stmt->bindParam(':cus_id', $_SESSION['user_id']);
                $stmt->bindParam(':item', $item['id']);
                $stmt->bindParam(':qty', $item['quantity']);


                if ($stmt->execute()) { {
                    unset($_SESSION['cart']);
                    header("Location:../thanks.php");
                    }
                } else {
                    echo "Failed to insert data.";
                }
            } catch (PDOException $e) {
                error_log("Insert error: " . $e->getMessage());
                die("An error occurred. Please try again.");
            }





        }


    }



    if (isset($_POST['add_product'])) {

        $filename = $_FILES["uploadfile"]["name"];
        $tempname = $_FILES["uploadfile"]["tmp_name"];
        $folder = "./image/" . $filename;

        // Now let's move the uploaded image into the folder: image
        move_uploaded_file($tempname, $folder);

        $name = sanitizeInput($_POST['name']);
        $price = sanitizeInput($_POST['price']);
        $qty = sanitizeInput($_POST['qty']);
        $cat = sanitizeInput($_POST['cat']);
        $uploadfile = sanitizeInput($filename);
        // echo $uploadfile;
        $seller = sanitizeInput($_SESSION['user_id']);

        try {
            // $stmt = $pdo->prepare("INSERT INTO items (name, price, qty , seller_id ) VALUES (:name, :price, :qty, :seller_id)");
            $stmt = $pdo->prepare("INSERT INTO items (name, price, qty, image , seller_id, cat ) VALUES (:name, :price, :qty, :uploadfile, :seller_id, :cat)");

            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':price', $price);
            $stmt->bindParam(':qty', $qty);
            $stmt->bindParam(':uploadfile', $uploadfile);
            $stmt->bindParam(':seller_id', $seller);
            $stmt->bindParam(':cat', $cat);

            if ($stmt->execute()) { {
                    header("Location:../add-products.php");
                }
            } else {
                echo "Failed to insert data.";
            }
        } catch (PDOException $e) {
            error_log("Insert error: " . $e->getMessage());
            die("An error occurred. Please try again.");
        }

    }

}
?>