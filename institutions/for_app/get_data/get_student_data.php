<?php

include '../conn.php';

$id=intval($_POST['id']); // student id that we are gonna get from the app

$queryResult=$connect ->query("SELECT * FROM students WHERE id='".$id."'");
$result =array();
while ($fetchData=$queryResult->fetch_assoc()) {
  $result[]=$fetchData;
}

echo json_encode($result); // send the data as json

 ?>
