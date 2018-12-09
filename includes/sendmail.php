<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = '[Username]';                 // SMTP username
    $mail->Password = '[Password]';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('[email@example.com]', '[name]');

    $S_name=$_POST['name'];
    $S_email=$_POST['email'];
	$S_phone=$_POST['phone'];
    $S_message=$_POST['message'];


    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject ="From ".$S_name."'s Information"; //mail of title
    $mail->Body = "Name: ".$S_name."<br />Email: ".$S_email."<br />Email: ".$S_phone."<br />Message: ".$S_message;
  	

    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
	
  	$mail->IsHTML(true);                             
    $mail->AddAddress("$S_email");            
  	$mail->AddAddress('[email@example.com]');            //Recipient's mail and name
    $mail->send();
	
  	echo "<script>
    alert('Message has been sent the server and you.');
    window.location.href='/widgets/index.php';
	</script>";
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
?>
