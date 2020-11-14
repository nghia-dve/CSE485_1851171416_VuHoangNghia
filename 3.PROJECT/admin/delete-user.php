<?php
    include 'includes/config.php';
    $sql = "delete from users where userid = '".$_GET['del_id']."'";
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        header('location:admin/index.php');
    }
?>>