<?php
if(isset($_POST['email'])) {


    $to = "yoranantwoordmail@gmail.com";
    $subject = "New contact form submission";

    $name = strip_tags($_POST['name']);
    $email = strip_tags($_POST['email']);
    $subject = strip_tags($_POST['subject']);
    $message = strip_tags($_POST['message']);


    $email_body = "Name: $name\n\nEmail: $email\n\nSubject: $subject\n\nMessage: $message";

 
    $headers = "From: $email\n";
    $headers .= "Reply-To: $email\n";
    $headers .= "Content-Type: text/plain; charset=utf-8\n";
    $headers .= "MIME-Version: 1.0\n";

    if(mail($to, $subject, $email_body, $headers)) {
        echo "Thank you for your message! We'll be in touch soon.";
    } else {
        echo "There was a problem sending your message. Please try again later.";
    }

} else {
    echo "There was an error submitting the form. Please try again later.";
}
