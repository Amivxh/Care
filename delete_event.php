<?php
include 'conn.php'

$id = $_POST['event_type_id'];
$sql = "DELETE from event_type WHERE event_type_id=" . $id;
$q = $bdd->prepare($sql);
$q->execute();
?>