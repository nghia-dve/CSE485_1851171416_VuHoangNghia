<?php
    // Kiem tra
    $errors = array();
    $first_name = $_POST['txtFirstName'];
    if (empty($first_name)) {
		$errors[] = 'You forgot to enter your first name.';
    }
    
    $last_name = $_POST['txtLastName'];
	if (empty($last_name)) {
		$errors[] = 'You forgot to enter your last name.';
    }
    
    $email = $_POST['txtEmail'];
	if (empty($email)) {
		$errors[] = 'You forgot to enter your email address.';
    }
    
    $password1 = $_POST['txtPassword'];
	$password2 = $_POST['txtPassword2'];
	if (!empty($password1)) {
		if ($password1 !== $password2) { //#4
			$errors[] = 'Your two password did not match.';
		} 
	} else {
		$errors[] = 'You forgot to enter your password.';
	}
    // Kiem tra Error:
    if (empty($errors)){
        // Neu ko co loi: lam gi do tiep theo
        // B1: Ket noi database Server;
        $conn = mysqli_connect('localhost','root','','democh01');
        if(!$conn){
            die('Khong the ket noi');
        }
        // B2: Khai bao cau truy van
        $password_hash = password_hash($password1, PASSWORD_DEFAULT);
        $activation_code = substr(md5(uniqid(rand(), true)), 16, 16);
        // echo $activation_code;
        $sql = "INSERT INTO users ( first_name, last_name, email, password, registration_date, activation_code)
                VALUES('$first_name','$last_name','$email','$password_hash',NOW(),'$activation_code')";
        // echo $sql;
        if(mysqli_query($conn,$sql)){
            require_once "contact.php";
            $m = new sendMail();
            $from='web2code2vn@gmail.com';
            $tieudethu = '[Web2Code2Vn] Please verify your email address';
            $noidungthu = 'Almost done, @web2code2vn! To complete your GitHub sign up, we just need to verify your email address: web2code2vn@gmail.com.';
            $noidungthu .= '<a href="http://localhost/practices/active.php?code='.$activation_code.'">Click Here</a>';
            $p = 'nigosmckbdkvpgdo';
            $error = '';
            $m -> sendMailFromLocalhost($email, $from, $tennguoigui="Web2Code2Vn", $tieudethu, $noidungthu, $from, $p, $error);
            header("Location: login.php");
            exit();
        }else{
            header("Location: register.php");
            exit();
        }
        // B3: Xử lý kết quả
    }else{
        // Co loi, hien thi lai loi cho nguoi dung biet
        echo "Co loi nhap lieu ...";
    }
?>
