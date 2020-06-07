<?php
/**
 * This example shows how to handle a simple contact form.
 */

$msg = '';

//Don't run this unless we're handling a form submission
if (isset($_POST['myName']) and (empty($_POST['honeypot']))) {
    $myname = $_POST['myName'];
    $myemail = $_POST['myEmail'];
    $mymessage = $_POST['myQuestion'];
    date_default_timezone_set('Etc/UTC');

    require '../PHPMailer/PHPMailerAutoload.php';

    //Create a new PHPMailer instance
    $mail = new PHPMailer;
    //Tell PHPMailer to use SMTP - requires a local mail server
    //Faster and safer than using mail()
    $mail->isSMTP();
    $mail->Host = 'mail.kimberlymorgan.webhostingforstudents.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->Username = 'phpmailer@kimberlymorgan.webhostingforstudents.com';
    $mail->Password = 'Ihadakou4!';
    //Use a fixed address in your own domain as the from address
    //**DO NOT** use the submitter's address here as it will be forgery
    //and will cause your messages to fail SPF checks
    $mail->setFrom('phpmailer@kimberlymorgan.webhostingforstudents.com', 'Kimberly Morgan');
    //Send the message to yourself, or whoever should receive contact for submissions
    $mail->addAddress('kimberly.morgan2@pcc.edu', 'Kimberly Morgan');
    //Put the submitter's address in a reply-to header
    //This will fail if the address provided is invalid,
    //in which case we should ignore the whole request
    if ($mail->addReplyTo($myemail, $myname)) {
        $mail->Subject = 'PHPMailer contact form';
        //Keep it simple - don't use HTML
        $mail->isHTML(true);
        //Build a simple message body
        $mail->Body = <<<EOT
Email: $myemail
Name: $myname
Message: $mymessage
EOT;
        //Send the message, check for errors
        if (!$mail->send()) {
            //The reason for failing to send will be in $mail->ErrorInfo
            //but you shouldn't display errors to users - process the error, log it on your server.
            echo "Mailer Error:" .  $mail->ErrorInfo;


        } else {
            include 'success.html.php';
        }
    } else {
        include 'contact.html.php';
    }
}
else{
    include 'contact.html.php';
}

?>
