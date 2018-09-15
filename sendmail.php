
<?php


$to = "dr.jay3@juno.com";
$subject = "Re: Website";
$name_field = $_POST['name'];
$email_field = $_POST['email'];
$message = $_POST['message'];
$phone = $_POST['phone'];
 
$body = "From: $name_field\n E-Mail: $email_field\n Phone: $phone\n Message:\n $message";
 
echo "Your message has been sent to $to! Please click the back button on your browser to return to the website! Thanks for your input.";
mail($to, $subject, $body);


?>

