<?php
$hostName = '127.0.0.1';
$userName = 'root';
$password = '';
$databaseName = 'csec2020';
    
$conn = mysqli_connect($hostName, $userName, $password, $databaseName);
if ($conn){
    echo "Connection success";
}
else{
    echo "Connection failed!!" + mysqli_connect_error();
}
?>