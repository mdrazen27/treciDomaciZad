<?php
    header("Access-Control-Allow-Origin: *");
    
    require '../file_functions.php';

    $countries = getUsersFromFile("countries.txt");

    echo json_encode($countries);
?>