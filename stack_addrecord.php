<?php
include('config.php');
?>


<?php 
if (isset($_POST['submit'])){
 echo "Dear, ".$_POST['name']." You are Welcome.".'<br>';
    $id = $_POST['id'];
 $name = $_POST['name'];
 $age = $_POST['age'];
 $contact = $_POST['contact'];
 $email = $_POST['email']; 
    
    $sql  = "INSERT INTO `users` (id, name, age, contact, email) 
    VALUES ('$id','$name', '$age', '$contact', '$email')";
    mysqli_query($conn, $sql);
    header("Location:hello1.php");
}
else{
    echo "Welcome Guest";
}
?>