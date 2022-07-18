<?php
include_once("config.php");
$id = $_GET['id'];

$result = mysqli_query($mysqli,"DELETE FROM Student WHERE id='$id'");
header("Location: index.php")

?>