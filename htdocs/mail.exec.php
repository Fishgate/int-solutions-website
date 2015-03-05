<?php
require_once('./IS-config.php');

// create a new instance of our Mailer class
$mail = new Mailer();

// setup some required variables for the class
$mail->template_path    = './templates/confirmation.html';
$mail->client_name      = $_POST['name'];
$mail->client_email     = $_POST['email'];
$mail->client_telephone = $_POST['phone'];
$mail->client_message   = $_POST['message'];
$mail->admin_email      = ADMIN_EMAIL;
$mail->admin_name       = ADMIN_NAME;

/*try {
    if($mail->logEmail($_POST['name'], $_POST['phone'], $_POST['email'], $_POST['message'])){
        echo 'success';
    }
} catch (Exception $ex) {
    echo $ex->getMessage();
}*/

/*
try {
   if($mail->sendConfirmEmail()){
       try {
           return $mail->logEmail();
       } catch (Exception $ex) {
           return $ex->getMessage();
       }
   }
} catch (Exception $ex) {
    echo $ex->getMessage();
}
*/

// decided to log the form request first, just so all attempts can be seeing even if the mail never happens
try {
    if($mail->sendConfirmEmail()){
        try {
            if($mail->sendNotifyEmail()){
                echo 'success';
            }
        } catch (Exception $ex) {
            return $ex->getMessage();
        }
    }   
} catch (Exception $ex) {
    return $ex->getMessage();
}

?>
