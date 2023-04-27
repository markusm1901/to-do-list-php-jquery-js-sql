<?php
function send_email(string $email, string $listname){
    require 'PHPMailer-master/src/PHPMailer.php';
    require 'PHPMailer-master/src/SMTP.php';
    require 'PHPMailer-master/src/Exception.php';
    //todolistsender123@gmail.com Todolistsenderassword123
    // $mail = new PHPMailer(true);
    
    // Set SMTP settings
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // Enter your SMTP host
    $mail->SMTPAuth = true;
    $mail->Username = 'todolistsender123@gmail.com'; // Enter your SMTP username
    $mail->Password = 'pvhlnmgwhfjftocf'; // Enter your SMTP password
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $folder_name = basename(__DIR__);
    // Set email details
    $mail->setFrom('todolistsender123@gmail.com', 'To-do List');
    $mail->addAddress("$email");
    $mail->Subject = 'Your new To-Do List';
    $mail->Body = "<p>Link to your new To-Do List is: http://localhost/".$folder_name."/".$listname.".php </p>";
    $mail->isHTML(true);
    // Send email
    if (!$mail->send()) {
        echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message sent!';
        update_email_status($listname,$email);
        refresh();
    }
}?>