<?php
    include 'includes/config.php';
    $id = $_POST['id'];
    $fname = $_POST['Fname'];
    $lname = $_POST['Lname'];
    $email = $_POST['email'];
    $level = $_POST['level'];
    $sql = "update users set first_name = '$fname',last_name ='$lname',email = '$email',chuc_nang = '$level' where userid='$id'"; 
    if(mysqli_query($conn,$sql))
    {
        header('location:index.php');
    }
?>