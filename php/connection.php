<?php
    $server = "localhost";
    $database = "library";

    $user = "root";
    $password = "";

    $connection = new PDO("mysql:server=$server;port=3307;dbname=$database", "$user", "$password");


?>