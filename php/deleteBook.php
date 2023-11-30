<?php
    include "connection.php";

    $id = $FET['id'];

    $connection->query("DELETE FROM books WHERE id='$id'");

    header("Location: getBooks.php");

?>