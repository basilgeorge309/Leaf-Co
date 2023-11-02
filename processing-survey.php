<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $service = $_POST["service"];
    $urgency = $_POST["urgency"];
    $comments = $_POST["comments"];
    
    // Construct the email message
    $to = "basilgeorge309@email.com"; // Your email address
    $subject = "Survey Response";
    $message = "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Phone: $phone\n";
    $message .= "Address: $address\n";
    $message .= "Service: $service\n";
    $message .= "Urgency: $urgency\n";
    $message .= "Comments:\n$comments";
    
    // Send the email
    $headers = "From: $email\r\nReply-To: $email";
    
    if (mail($to, $subject, $message, $headers)) {
        // Email sent successfully
        header("Location: thankyou.html");
        exit;
    } else {
        // Email sending failed
        echo "Email sending failed. Please try again later.";
    }
}
?>
