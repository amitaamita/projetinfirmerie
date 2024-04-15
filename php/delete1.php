<?php

include 'db.php';

$id = $_GET['id'];

$result = mysqli_query($db, "delete from rendez_vouz where id =$id");

header("Location:listerv.php");
?>