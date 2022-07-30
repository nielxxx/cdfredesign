<?php
    require 'smtp/cred.php';
    require 'smtp/PHPMailerAutoload.php';
    //identify if user inputs something
    if(isset($_POST['submit'])){
        $email=$_POST['email'];
        $name=$_POST['name'];
        $message=$_POST['message'];
        $subject=$_POST['subject'];

        $mail = new PHPMailer(); 
        $mail->IsSMTP(); 
        $mail->SMTPAuth = true; 
        $mail->SMTPSecure = 'tls'; 
        $mail->Host = ""; //host
        $mail->Port = 587; //port
        $mail->IsHTML(true);
        $mail->CharSet = 'UTF-8';
        $mail->Username = EMAIL; //transmitter email
        $mail->Password = PWD; //transmitter pass
        $mail->Subject = $subject;
        $mail->Body = 
        "<h4>From: ".$name." </h4>".
        "<h4>Email: ".$email." </h4>".
        "<h4>Message: <br>".$message." </h4>" ;

        $mail->SetFrom(EMAIL,"CDFTRADINGINC.COM"); //from email
        $mail->AddAddress('renzyjohnm1@gmail.com'); //reciever email
        $mail->AddReplyTo($email); //senders email

        $mail->SMTPOptions=array('ssl'=>array(
            'verify_peer'=>false,
            'verify_peer_name'=>false,
            'allow_self_signed'=>false
        ));

        if ($mail->send()) {
            echo "success";
        }else{
            echo "error";
        }
    $mail->smtpClose();
    }

?>