<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Gather form data
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $message = $_POST['message'];

    // Set up email
    $to = "gadayanharold27@gmail.com"; // Your Gmail address
    $subject = "New Contact Form Submission";
    $body = "First Name: $firstname\n";
    $body .= "Middle Name: $middlename\n";
    $body .= "Last Name: $lastname\n\n";
    $body .= "Message:\n$message";

    // Headers
    $headers = "From: $firstname $lastname <$to>";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Message sent successfully!');</script>";
        echo "<script>window.location = 'contact.html';</script>";
    } else {
        echo "<script>alert('Failed to send message. Please try again later.');</script>";
        echo "<script>window.location = 'contact.html';</script>";
    }
}
?>
