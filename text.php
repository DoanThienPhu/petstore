<?php
$link = mysqli_connect('us-cdbr-east-06.cleardb.net', 'b8a3e396f6a17e', 'dd66fbcf');
if (!$link) {
die('Could not connect: ' . mysqli_error());
}
echo 'Connected successfully';
mysqli_close($link);
?>
