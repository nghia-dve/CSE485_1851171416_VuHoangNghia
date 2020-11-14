<?php
    include 'includes/config.php';
    $tieu_de = $_POST['tieu_de'];
    $noi_dung = $_POST['noi_dung'];
    // File upload path
    $targetDir = "../image/";
    $fileName = basename($_FILES["file"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
    if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
        // Allow certain file formats
        $allowTypes = array('jpg','png','jpeg','gif','pdf');
        if(in_array($fileType, $allowTypes)){
            // Upload file to server
            if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
                // Insert image file name into database
                $sql = "INSERT INTO baiviet (tieu_de, noi_dung, Image) VALUES ('$tieu_de', '$noi_dung', '$fileName') ";
                if (mysqli_query($conn,$sql))
                {
                    header('location:QL_bai_viet.php');
                }
            }
        }
    }
?>