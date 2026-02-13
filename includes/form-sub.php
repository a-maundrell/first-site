<?php
if (basename(__FILE__) == basename($_SERVER['PHP_SELF'])) {
    exit('No direct script access allowed.');
}

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name    = htmlspecialchars(trim($_POST['name']));
    $email   = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['message'] = "Invalid email format.";
        $_SESSION['msg_type'] = "error";
        header("Location: contact1.php");
        exit();
    }

    if (!empty($name) && !empty($email) && !empty($message)) {
        $to      = "info@alex-maundrell.dev";
        $subject = "New Contact Form Submission";
        $body    = "You have received a new message from your website's contact form:\n\n";
        $body   .= "Name: $name\n";
        $body   .= "Email: $email\n";
        $body   .= "Message:\n$message\n";
        $headers = "From: no-reply@alex-maundrell.dev\r\n";
        $headers .= "Reply-To: $email\r\n";

        if (mail($to, $subject, $body, $headers)) {
            $_SESSION['message'] = "Thank you for your message! We'll be in touch soon.";
            $_SESSION['msg_type'] = "success";
        } else {
            $_SESSION['message'] = "Sorry, there was an issue sending your message. Please try again.";
            $_SESSION['msg_type'] = "error";
        }
    } else {
        $_SESSION['message'] = "Please fill in all required fields.";
        $_SESSION['msg_type'] = "error";
    }

    header("Location: contact1.php");
    exit();
}
?>