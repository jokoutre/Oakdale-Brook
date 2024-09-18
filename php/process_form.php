<?php
    // Check if the form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Collect and sanitize the form data
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $phone = htmlspecialchars($_POST['phone']);
        $child_age = htmlspecialchars($_POST['child-age']);
        $zone = htmlspecialchars($_POST['zone']);
        $comments = htmlspecialchars($_POST['comments']);

        // Send the form data via email or store it in a database
        $to = "your-email@example.com";  // Replace with your email address
        $subject = "New Co-op Registration";
        $message = "Name: $name\nEmail: $email\nPhone: $phone\nChild's Age: $child_age\nZone: $zone\nComments: $comments";
        $headers = "From: no-reply@yourdomain.com";  // Change to your domain email address

        // Send email
        if (mail($to, $subject, $message, $headers)) {
            echo "Registration successful! We'll be in touch soon.";
        } else {
            echo "There was a problem sending your registration. Please try again.";
        }
    }
?>
