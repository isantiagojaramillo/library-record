<?php
    include "connection.php";

    // GETTING DATA
    $title = $_POST['title'];
    $author = $_POST['author'];
    $description = $_POST['description'];

    $send = $connection -> prepare("INSERT INTO books VALUES (null, ?, ?, ?)");

    $send -> bindParam(1, $title);
    $send -> bindParam(2, $author);
    $send -> bindParam(3, $description);
    $send -> execute();

    header('Location: ../index.html');





?>