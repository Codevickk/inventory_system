<?php

require_once '../config/Database.php';
require_once '../models/Computer.php';

// Initialise the required classes
$database = new Database();
$conn = $database->getConnection();
$computer = new Computer($conn);


// Initialise the data to be collected from the client
$computer_id = "";

// Initialise the error and response variable
$errors = array();
$response = array();


if(isset($_POST)){
    //  the form has been submitted

    // Collect the user's input
    $computer_id = isset($_POST['computerID']) ? $_POST['computerID'] : "";

    // Check if the compulsory fields are empty 
    if(empty($computer_id)) {
        $errors[] = 'Invalid Request';
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

    if($computer->delete()) {
        // The query was successfully executed
        // Give out a response
        $response['status'] = true;
        $response['msg'] = 'Your record has been successfully deleted';
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