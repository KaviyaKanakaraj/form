<?php
include 'includes/dbConnectionOpen.php';

$sql = "SELECT * FROM counter";
$update = "UPDATE counter SET count = count + 1 WHERE ID = 1";

$result = mysqli_query($conn, $sql);
mysqli_query($conn, $update);
$hits = mysqli_fetch_assoc($result);
echo 'Total visitors: '.$hits['count']; 
?>