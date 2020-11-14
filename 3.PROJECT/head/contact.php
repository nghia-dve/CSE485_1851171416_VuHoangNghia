<?php
class sendMail{
    function sendMailFromLocalhost($to, $from, $from_name, $subject, $body, $username, $password, $error){
       $error = "";
       require_once "class.phpmailer.php";      
       require_once "class.smtp.php";      
       try {
            $mail = new PHPMailer();  
            $mail -> IsSMTP(); 
            $mail -> SMTPDebug = 0;  //  1=errors and messages, 2=messages only
            $mail -> SMTPAuth = true;  
            $mail -> SMTPSecure = 'tls'; 
            $mail -> Host = 'smtp.gmail.com';
            $mail -> Port = 587; 
            $mail -> Username = $username;
            $mail -> Password = $password;           
            $mail -> SetFrom($from, $from_name);
            $mail -> Subject = $subject;
            $mail -> MsgHTML($body);// noi dung chinh cua mail
            $mail -> AddAddress($to);
            $mail -> CharSet="utf-8";
            $mail -> IsHTML(true);
            if( !$mail->Send() ) {
              echo $error = 'Có lỗi:'.$mail->ErrorInfo;
            } else { 
                $error = '';
            }
       } 
       catch (phpmailerException $e) { echo "<pre>".$e->errorMessage(); }    
    }
}
?>