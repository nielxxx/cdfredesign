<?php
    require 'smtp/cred.php';
    require 'smtp/PHPMailerAutoload.php';
    //identify if user inputs something
    if(isset($_POST['submit'])){
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $email=$_POST['email'];
        $number=$_POST['number'];
        $address=$_POST['address'];
        $message=$_POST['message'];

        $mail = new PHPMailer(); 
        $mail->IsSMTP(); 
        $mail->SMTPAuth = true; 
        $mail->SMTPSecure = 'tls'; 
        $mail->Host = "mail.cdftradinginc.com"; //host
        $mail->Port = 587; //port
        $mail->IsHTML(true);
        $mail->CharSet = 'UTF-8';
        $mail->Username = EMAIL; //transmitter email
        $mail->Password = PWD; //transmitter pass
        $mail->Subject = "Inquire";
        $mail->Body = 
        "<h4>Full Name: ".$firstname." ".$lastname."</h4>
        <h4>Email: ".$email." </h4>
        <h4>Contact Number / Telephone: ".$number."</h4>
        <h4>Address: ".$address."</h4>
        <h4>Message: ".$message." </h4>";

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