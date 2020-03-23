<?php include('config.php'); ?>

<?php
$id = $_GET['id'];
?>
<?php
if(isset($_POST['delete']))
{
$sql = "DELETE `users` SET name='$name', age='$age',
    contact='$contact', email='$email' WHERE id='$id'";
    if(mysqli_query($conn, $sql))
    {
        header("Location:details.php");
    }
    else{
        echo 'failed'.mysqli_error($conn);
    }
}
?>