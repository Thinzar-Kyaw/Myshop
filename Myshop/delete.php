<?php
if (isset($_GET['id'])) {
    $id = $_GET["id"];

    $servername = "localhost:4306";
    $username = "root";
    $password = "";
    $database = "myshop";

    // Create connection
    $connection = new mysqli($servername, $username, $password, $database);

    $sql = "DELETE FROM clients WHERE id=$id";
    $connection->query($sql);
}

header("location: /Myshop/index.php");
exit;
?>