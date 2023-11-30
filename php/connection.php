<?php
    // $server = "localhost";
    // $database = "library";
    $server = "localhost";
    $database = "id21601161_form";

    // $user = "root";
    // $password = "";
    $user = "id21601161_root";
    $password = "";

    $connection = new PDO("mysql:server=$server;port=3307;dbname=$database", "$user", "$password");


?>