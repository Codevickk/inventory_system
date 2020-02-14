<?php

require_once '../config/Database.php';
require_once '../models/Computer.php';

// Initialise the required classes
$database = new Database();
$conn = $database->getConnection();
$computer = new Computer($conn);


// Initialise the data to be collected from the client
$computer_id = "";
$item = "";
$type = "";
$model = "";
$serial_no = "";
$campus = "";
$housing = "";
$cap_date = "";
$relo_date ="";
$new_location = "";
$new_housing = "";

// Initialise the error and response variable
$errors = array();
$response = array();


if(isset($_POST)){
    //  the form has been submitted

    // Collect the user's input
    $computer_id = isset($_POST['computerID']) ? $_POST['computerID'] : "";
    $item = isset($_POST['item']) ? $_POST['item'] : "";
    $type = isset($_POST['type']) ? $_POST['type'] : "";
    $model = isset($_POST['model']) ? $_POST['model'] : "";
    $serial_no = isset($_POST['serialNo']) ? $_POST['serialNo'] : "";
    $campus = isset($_POST['campus']) ? $_POST['campus'] : "";
    $housing = isset($_POST['housing']) ? $_POST['housing'] : "";
    $cap_date = isset($_POST['capDate']) ? $_POST['capDate'] : "";
    $relo_date = isset($_POST['reloDate']) ? $_POST['reloDate'] : "";
    $new_location = isset($_POST['newLocation']) ? $_POST['newLocation'] : "";
    $new_housing = isset($_POST['newHousing']) ? $_POST['newHousing'] : "";

    // Check if the compulsory fields are empty 
    if(empty($item) || empty($type) || empty($model) || empty($serial_no) || empty($campus) || empty($housing) || empty($cap_date)) {
        $errors[] = 'Please fill in the required fields';
    } 

    if(count($errors) > 0){
        // Give out the response
        $response['status'] = false;
        $response['msg'] = $errors;

        echo(json_encode($response));
    }

    else{
    // Continue processing the form
    $computer->computer_id = $computer_id;
    $computer->item = $item;
    $computer->type = $type;
    $computer->model = $model;
    $computer->serial_no = $serial_no;
    $computer->campus = $campus;
    $computer->housing = $housing;
    $computer->cap_date = $cap_date;
    $computer->relo_date = $relo_date;
    $computer->new_location = $new_location;
    $computer->new_housing = $new_housing;

    if($computer->edit()) {
        // The query was successfully executed
        // Give out a response
        $response['status'] = true;
        $response['msg'] = 'Your record has been successfully updated';;
        echo json_encode($response);
    }
    else {
        // An internal error occured
        $errors[] = 'An error occurred, try again later';
    
        // Give out a response
        $response['status'] = false;
        $response['msg'] = $errors;
        echo(json_encode($response));
    }

    }
}

?>