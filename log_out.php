<?php

// unset($_SESSION['user_name']);
// unset($_SESSION['auth']);
// unset($_SESSION['id']);
session_destroy();

header("Location:index.php");


?>

