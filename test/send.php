<?php
// Set the recipient email address
$to = "itssahilthakur@gmail.com";

// Set the subject of the email
$subject = "Test Email";

// Set the message body
$message = "This is a test email sent from PHP.";

// Set the sender's email address
$sender_email = "ceo@cgc.ac.in";

// Set additional headers (including "From" header)
$headers = "From: $sender_email\r\n";
$headers .= "Reply-To: $sender_email\r\n";
$headers .= "CC: cc@example.com\r\n"; // CC (carbon copy)
$headers .= "BCC: bcc@example.com\r\n"; // BCC (blind carbon copy)

// Send the email
if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Email could not be sent.";
}
?>
