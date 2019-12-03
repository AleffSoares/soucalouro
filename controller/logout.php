
<?php
session_start();
unset($_SESSION['email']);
unset($_SESSION['password']);
header('location: ../view/index.php');
session_destroy();
?>