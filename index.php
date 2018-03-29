<?php
// configureer php script
date_default_timezone_set('Europe/Brussels');
error_reporting(E_ALL);
ini_set('display_errors', 'On');

require_once('scripts/call_api.php');

$lijnen = CallAPI("GET","http://127.0.0.1:8080/extern/api.php/tbllijnen");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lijnen - overzicht</title>
</head>
<body>
<?php require("_header.php"); ?>
<main>
    <table>
        <thead>
        <tr>
            <th>lijnID</th>
            <th>Nr</th>
            <th>Omschrijving</th>
            <th>P&R</th>
            <th>Type</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($lijnen as $lijn) {
            echo "<tr>";
                echo '<td>'.$lijn['LijnID'].'</td>';
                echo '<td>'.$lijn['Nr'].'</td>';
                echo '<td>'.$lijn['Omschrijving'].'</td>';

                if($lijn['ParkAndRideID']==1){
                    $convertedPR="Flanders Expo PR";
                }else if($lijn['ParkAndRideID']==2){
                    $convertedPR="Gentbrugge PR";
                }else if($lijn['ParkAndRideID']==3){
                    $convertedPR="Lochristi PR";
                }else{
                    $convertedPR="Geen PR";
                }

                echo '<td>'.$convertedPR.'</td>';

                if($lijn['TypeVoertuigID']==1){
                    $convertedType="tram";
                }else{
                    $convertedType="bus";
                }
                echo '<td>'.$convertedType.'</td>';

                echo '<td><a href="delete.php?lijnID='.$lijn['LijnID'].'">Delete</a></td>';
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</main>
</body>
</html>