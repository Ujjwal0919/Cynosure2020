<?php
require 'vendor/autoload.php';
$Api_Key="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"; // If you're using Composer (recommended)
if(isset($_POST['register']))
{
    $uname = $_POST['email'];
    $pwd1 = $_POST['pwd'];
}
$email = new \SendGrid\Mail\Mail();
$email->setFrom("testingemail0919@gmail.com", "Example User");
$email->setSubject("Testing for cynosure");
$email->addTo($uname, "Example User");
$email->addContent("text/plain", "This a testing email for cynosure");
//$email->addContent(
//    "text/html", "<strong>and easy to do anywhere, even with PHP</strong>"
//);
$sendgrid = new \SendGrid($Api_Key);
if($sendgrid->send($email));
{
 echo " Email Sent Successfully";
}
/*
try {
    $response = $sendgrid->send($email);
    print $response->statusCode() . "\n";
    print_r($response->headers());
    print $response->body() . "\n";
} catch (Exception $e) {
    echo 'Caught exception: '. $e->getMessage() ."\n";
} */