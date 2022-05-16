<?php
// List of events
$json = array();

// Query that retrieves events
$request = "SELECT * FROM event_type ORDER BY event_type_id";

// connection to the database
include 'conn.php'

// Execute the query
$result = $bdd->query($request) or die(print_r($bdd->errorInfo()));

// sending the encoded result to success page
echo json_encode($result->fetchAll(PDO::FETCH_ASSOC));

?>