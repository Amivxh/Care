<?php
include 'conn.php'
// Values received via ajax
$event_name = $_POST['event_name'];
$date_event = $_POST['date_event'];

// insert the records
$sql = "INSERT INTO event_type (event_name, date_event) VALUES (:event_name, :date_event)";
$q = $bdd->prepare($sql);
$q->execute(array(':event_name' => $event_name, ':date_event' => $date_event));
?>