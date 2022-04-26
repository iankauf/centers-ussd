<?php

// Read the variables sent via POST from our API
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text        = $_POST["text"];

if ($text == "") {
    // This is the first request. Note how we start the response with CON
    $response  = "CON What Region Are You In \n";
    $response .= "1. Central Region \n";
    $response .= "2. Southern Region ";


} else if ($text == "1") {
    // Business logic for first level response
    $response = "CON Choose Health Center  \n";
    $response .= "1. Kamuzu Central Hospital \n";
    $response .= "2. Area 18 Health Center \n";
    $response .= "3. Bwaila Health Center \n";

} else if ($text == "2") {
    // Business logic for first level response
    $response = "CON Choose Health Center  \n";
    $response .= "1. Queen Elizabeth Hospital \n";
    $response .= "2. Mwaiwathu Health Center \n";
    $response .= "3. SDA Health Center \n";
    
} else if($text == "1*1") { 
    // This is a second level response where the user selected 1 in the first instance
    

    // This is a terminal request. Note how we start the response with END
    $response = "END The vaccines available are: Pfizer \n Astrazaneca \n Johnson and Johnson";

} else if($text == "1*2"){
    // This is a terminal request. Note how we start the response with END
    $response = "END The vaccines available are:\n Pfizer \n Astrazaneca \n Johnson and Johnson";
    
} else if($text == "1*3"){

    $response = "END The vaccines available are:\n Astrazaneca \n Johnson and Johnson";
    
} //////
  else if($text == "2*1"){
    // This is a terminal request. Note how we start the response with END
    $response = "END The vaccines available are:\n Pfizer \n Astrazaneca \n Johnson and Johnson";
    
} else if($text == "2*2"){

    $response = "END The vaccines available are:\n Astrazaneca \n Johnson and Johnson";
    
} else if($text == "2*3"){

    $response = "END The vaccines available are:\n Astrazaneca \n Johnson and Johnson";

} 

// Echo the response back to the API
header('Content-type: text/plain');
echo $response;
