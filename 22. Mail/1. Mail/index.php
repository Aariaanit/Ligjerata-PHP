<?php
    require 'phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;
    $mail ->isSMTP();
    
    $mail ->Host = 'smtp.gmail.com';
    $mail ->Port = 587;
    $mail ->SMTPAuth = true;
    $mail ->SMTPSecure = 'tls';
    
    $mail ->Username = 'shkolladigjitaleprizren@gmail.com';
    $mail ->Password ='usnnfecgcqswdjss';
    $mail ->setFrom('shkolladigjitaleprizren@gmail.com','ShkollaDigjitalePrizren');
    $mail ->addAddress('arianittershnjaku@gmail.com');
    $mail ->addReplyTo('shkolladigjitaleprizren@gmail.com');
    
    $mail ->isHTML(true);
    $mail ->Subject = 'PHP Mailer Subject';
    $mail ->Body = '<h1> Arianit Tershnjaku Dragash</h1>';
    
    if(!$mail->send()){
        echo "Messages Could not be send!";
        echo 'Error: '. $mail->ErrorInfo;
    }
    else{
    
        echo "Message has been send!";
}

?>