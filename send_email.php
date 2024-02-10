<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Set recipient email address
    $to = "ankitds700@gmail.com"; // Replace with your email address
    
    // Set email subject
    $subject = "New message from $name";
    
    // Build email body
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message";
    
    // Set additional headers
    $headers = "From: $name <$email>";
    
    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Your message has been sent successfully.";
    } else {
        echo "Error: Unable to send your message.";
    }
} else {
    // Redirect back to the contact page if accessed directly
    header("Location: contact.php");
    exit;
}
?>
