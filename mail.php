<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form fields
    $name = htmlspecialchars($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars($_POST['message']);

    // Recipient email address
    $to = "vivek.techai@gmail.com";

    // Subject of the email
    $subject = "New Contact Form Submission from $name";

    // Email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Message:\n$message\n";

    // Email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send the email
    if (mail($to, $subject, $email_content, $headers)) {
        // Redirect to a thank you page or show a success message
        echo "Thank you for your message. We will get back to you soon!";
    } else {
        // If the email could not be sent, show an error message
        echo "Oops! Something went wrong, please try again.";
    }
}
?>
