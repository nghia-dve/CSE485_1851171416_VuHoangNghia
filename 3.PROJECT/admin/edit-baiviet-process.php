<?php
    include 'includes/config.php';
    $id = $_POST['id_baiviet'];
    $tieude = $_POST['tieude'];
    $noidung = $_POST['noidung'];
    $sql = "UPDATE baiviet SET tieu_de = '$tieude', noi_dung = '$noidung' where id = '$id'";
    if(mysqli_query($conn,$sql))
    {
        
       header('location:QL_bai_viet.php');
    }
?>