<?php
require 'database.php';


$id= $_GET['id'];
//die(var_dump($id));

$result = $db->query("DELETE FROM reportholder WHERE Report_id = ${id}");
//die(var_dump($result));

if(!$result) {
	die('Could not delete data!');
}

header('Location: admin.php');
die();