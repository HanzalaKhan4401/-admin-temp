<?php
include('config.php');
$user_id = $_GET['id'];

$delete = "DELETE from `temp_1` where id = '$user_id'";

$result = mysqli_query($conn, $delete);

if (!$delete) {
    die("Query Failed");
}
header('location:registeredusers.php');
?> 