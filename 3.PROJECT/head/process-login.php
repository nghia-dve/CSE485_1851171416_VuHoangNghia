<?php
    // Kiem tra
    session_start();
//     $errors = array();
//     $email = $_POST['txtEmail'];
//     $_SESSION['username'] = $email;
// 	if (empty($email)) {
// 		$errors[] = 'You forgot to enter your email address.';
//     }
//     $password = $_POST['txtPassword'];
	
// 	if (empty($password)) {	
// 			$errors[] = 'Your two password did not match.';
// 	} 
//     // Kiem tra Error:
//     if (empty($errors)){
//         // B1: Ket noi database Server;
//         $conn = mysqli_connect('localhost','root','','democh01');
//         if(!$conn){
//             die('Khong the ket noi');
//         }
//         // B2: Khai bao cau truy van
//         $sql = "SELECT * FROM users WHERE email='$email'";
//         if(mysqli_num_rows($result)>0){
//             $row = mysqli_fetch_assoc($result);
//             // print_r($row);
//             $password_hash = $row['password'];
//             // echo $password_hash;
//             if(password_verify($password,$password_hash)){
//                header('location:../admin/index.php');
			   
//             }else{
//                 echo "Chưa khớp";
//             }
//         }else{
//             echo ".....";
//         }

//     }else{
//         // Co loi, hien thi lai loi cho nguoi dung biet
//         echo "Co loi nhap lieu ...";
//     }
// ?>
<?php

    // Kiem tra
    $errors = array();
    $email = $_POST['txtEmail'];
    $_SESSION['username'] = $email;
	if (empty($email)) {
		$errors[] = 'You forgot to enter your email address.';
    }

    $password = $_POST['txtPassword'];
	
	if (empty($password)) {	
			$errors[] = 'Your two password did not match.';
	} 
    // Kiem tra Error:
    if (empty($errors)){
        // B1: Ket noi database Server;
        $conn = mysqli_connect('localhost','root','','simpledb');
        if(!$conn){
            die('Khong the ket noi');
        }
        // B2: Khai bao cau truy van
        $sql = "SELECT * FROM users WHERE email='$email'";
        // echo $sql;
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            $row = mysqli_fetch_assoc($result);
            // print_r($row);
            $password_hash = $row['password'];
            // echo $password_hash;
            if(password_verify($password,$password_hash)){
                    if($email=='nghiapgs@gmail.com')
                        header('location:../admin/index.php');
                    else
                        header('location:../index.php');

			   
            }else{
                echo "Chưa khớp";
            }
        }else{
            echo ".....";
        }

    }else{
        // Co loi, hien thi lai loi cho nguoi dung biet
        echo "Co loi nhap lieu ...";
    }
?>