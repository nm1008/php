<?php
require('./database.php');

if (isset($_POST["delete"])) {
    $deleteId = $_POST['deleteId'];

    $queryDelete = "DELETE FROM accounts WHERE id = $deleteId";
    $sqlDelete = mysqli_query($connection, $queryDelete);

    echo '<script>alert("Successfully deleted id: '.$deleteId.'!");</script>';
    echo '<script>window.location.href = "/php-crud/index.php";</script>';
    exit;
}


$sqlAccounts = mysqli_query($connection, "SELECT * FROM accounts");

?>