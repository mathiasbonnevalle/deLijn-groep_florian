<?php
require_once('scripts/call_api.php');

//print_r($_POST);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $lijn = array();
    $lijn['Nr'] = $_POST['nr'];
    $lijn['Omschrijving'] = $_POST['omschrijving'];
    $lijn['ParkAndRideID'] = $_POST['parkride'];
    $lijn['TypeVoertuigID'] = $_POST['type'];

    $result = CallAPI("POST", "http://127.0.0.1:8080/extern/api.php/tblLijnen", json_encode($lijn));

    //echo '<pre>' . print_r($result, true) . '</pre>';

    if(is_numeric($result)){
        header("location: index.php");
    }else{
        print_r($result);
    }
}