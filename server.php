<?php
require_once __DIR__ . '/helpers/functions.php';
//var_dump($_GET);
//var_dump(isset($_GET['email']));


$email = $_GET['email'];

if (isset($email)) {
    //var_dump($email);

    // if (str_contains($email, '@' ) && str_contains($email, '.')) {
    //    echo $message= 'OK';
    // }else{
    //    echo $message='Fail';
    // }

    $response = checkMail($email);

    $message = generateAlertMessage($response);

    var_dump($message);

    $_SESSION["message"] = $message;

 

    if ($message['status'] == 'danger') {
        header('Location: /php/php-iscrizione-newsletter/');
        return $message;
    }else{
        header('Location: /php/php-iscrizione-newsletter/thankyou.php');
        
    }
   
}
