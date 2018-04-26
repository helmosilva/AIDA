<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require './config/init.php';

try {
    $results = $mysqli_conn->query("SELECT * FROM cars");
} catch (Exception $e) {
    echo "error = " . $e;
}

$foods = $results->fetchAll(PDO::FETCH_ASSOC);
$new_array = array();
foreach ($cars as $car){
    array_push($new_array, $car);
}

header('Content-type: application/json');
echo json_encode($new_array);


?>