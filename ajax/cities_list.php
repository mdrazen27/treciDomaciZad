<?php
    header("Access-Control-Allow-Origin: *");
    
    require '../file_functions.php';

    $cities = getUsersFromFile("cities.txt");

    echo json_encode($cities);
?>