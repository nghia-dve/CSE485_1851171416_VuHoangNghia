<?php
    include 'includes/config.php';
    $sql = "delete from baiviet where id = '".$_GET['del_id']."'";
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        header('location:QL_bai_viet.php');
    }
?>