<?php
include 'setting.php';
$conn = mysqli_connect("$bySiteDB", "$bySiteDBuser", "$bySiteDBpw", "$bySiteDBname");
$sql = 'select count(*) as cnt from `_article` order by id desc';
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$max = $row['cnt'];
$num = mt_rand(1, $max);

$sql = "SELECT * FROM `_article` where `id` LIKE '$num'";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)){
$title = $row['title'];
}

echo "<script>location.replace('index.php?b=$title');</script>"; 
?>