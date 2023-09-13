
    // $name = $_POST['name'];
    // $visitor_email = $_POST['email'];
    // $message = $_POST['message'];

    // $email_form = 'ksam2251@gmail.com';

    // $email_subject = "New Form Submission";

    // $email_body = "User Name: $name.\n".
    //                 "User Email: $visitor_email.\n".
    //                     "User Message: $message.\n";

    // $to = "sameerahmed2k01@gmail.com";

    // $headers = "From: $email_from \r\n";

    // $headers .= "Reply-To: $visitor_email \r\n";

    // mail($to, $email_subject, $email_body, $headers);

    // header("Location: index.html");

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Define the recipient email address
    $to = "your_email@example.com";

    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Create email headers
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

    // Compose the email message
    $subject = "New Contact Form Submission";
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Message:\n$message";

    // Send the email
    if (mail($to, $subject, $email_message, $headers)) {
        // Email sent successfully
        echo "Thank you for your message. We will get back to you shortly.";
    } else {
        // Email sending failed
        echo "Oops! Something went wrong, and we couldn't send your message.";
    }
}
?>

