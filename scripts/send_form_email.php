<?php
$EmailTo = "contact@tedxiithyderabad.com";
$Subject = "You got a contact from tedxiithyderabad.com";
$name = Trim(stripslashes($_POST['name'])); 
$email = Trim(stripslashes($_POST['email'])); 
$phone_number = Trim(stripslashes($_POST['phone_number'])); 
$comment = Trim(stripslashes($_POST['comment'])); 

// validation
$validationOK=true;
//if (!$validationOK) {
 // print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
 // exit;
//}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Phone: ";
$Body .= $phone_number;
$Body .= "\n";
$Body .= "Comment: ";
$Body .= $comment;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: $Email");

// redirect to success page 
//if ($success){
//  print "<meta http-equiv=\"refresh\" content=\"0;URL=/thank-you.html\">";
//}

?>
