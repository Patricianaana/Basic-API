<?php

//headers
header("Content-Type: application/json");
header("Access-Control-Allow-Methods: GET");

try {
	if ($_SERVER['REQUEST_METHOD'] == 'GET'){
		//Writing server logic
		$name = "Naana";
		$age = 20;
		$isMale = false;
		$location = ["Accra","Kumasi"];
		$geolocation = ["lat"=>5.55,"lng"=>-0.22]; // {"lat":5.55,"lng":-0.22}

		// Response status code
		// 200 - OK
		// 201 - Created
		// 202 - Accepted
		// 204 - No Content
		// 301 - Redirect
		// 400 - Bad Request  client mistake
		// 401 - Unauthorized
		// 404 - Not Found
		// 500 - Server Error

//Declaring response code
		http_response_code(200);

//Sending playload
echo json_encode(
	[
		"name" => $name,
		"age" => $age,
		"isMale" => $isMale,
		"location" => $location,
		"geolocation" => $geolocation,
	]
);

//end logic
die(); // exit();
	} else {
		http_response_code(405); // Method not allowed
		echo json_encode(["message" => "Only GET method is allowed"]);
		die();
	}
	

} catch (Exception $e){
	http_response_code(500); // Method not allowed
	echo json_encode(["message" => $e]);
	die();
}

?>