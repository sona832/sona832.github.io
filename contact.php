<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
</head>
<body>
    <h1>Contact Us</h1>

    <?php
    // Check if the form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get form data
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];

        // Validate form data (you can add more validation here)
        if (empty($name) || empty($email) || empty($message)) {
            echo "<p>Please fill in all the fields.</p>";
        } else {
            // Send email
            $to = "your@email.com"; // Replace with your email address
            $subject = "Contact Form Submission";
            $headers = "From: $email\r\n" .
                       "Reply-To: $email\r\n" .
                       "X-Mailer: PHP/" . phpversion();
            $messageBody = "Name: $name\nEmail: $email\n\n$message";

            if (mail($to, $subject, $messageBody, $headers)) {
                echo "<p>Thank you for your message. We will get back to you soon!</p>";
            } else {
                echo "<p>Oops! Something went wrong. Please try again later.</p>";
            }
        }
    }
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
