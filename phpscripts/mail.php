<?php

session_start();

require_once '../phplibs/autoload.php';

$errors = array();
$messages = array();
$name = $_POST['fullname'];
$email = $_POST['email'];
$message = $_POST['message'];

if( isset($name, $email, $message) ) {
    $fields = array(
        'name' => $name,
        'email' => $email,
        'message' => $message
    );
    
    foreach($fields as $field => $data) {
        if( empty($data) ) {
            $errors[] = 'The ' . $field . ' field is required.';
        }
    }
    
    if( empty($errors) ) {
        
        $mail = new PHPMailer;
        
        $mail->SMTPDebug = 1;
        
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        
        $mail->Host = 'smtp.gmail.com';
        $mail->Username = 'specialagentsecret@gmail.com';
        $mail->Password = 'Supersecretpassword';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        
        $mail->isHTML();
        
        $mail->Subject = 'Message from Myfolio';
        $mail->Body = 'From: ' . $fields['name'] . ' (' . $fields['email'] . ')<p>' . $fields['message'] . '</p>';
        
        $mail->FromName = 'Contact';
        
        $mail->AddAddress('chinarakinda@gmail.com', 'Chinara James');
        
        if($mail->send()){
            $messages[] = 'Your Message has been sent. Thank You';
            $_SESSION['messages'] = $messages;
            header('Location:../index.php#contact');
            die();
        } else {
            $errors[] = 'Sorry could not send email. Please try again.';
        }
        
    }
    
} else {
    $errors[] = 'Something went wrong.';
}

$_SESSION['errors'] = $errors;
$_SESSION['fields'] = $fields;


header('Location:../index.php#contact'); 
