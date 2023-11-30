<?php
    include "connection.php";

    $id = $_GET['id'];

    $connection->query("DELETE FROM books WHERE id='$id'");

    header("Location: getBooks.php");

?>