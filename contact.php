<html>

<head>
    <title>Contact Me</title>
    <link rel="stylesheet" href="styles.css">
</head>


<body>
    <form id="contactForm">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>

        <button type="submit">Submit</button>   
    </form>
</body>

</html>

<?php
if ($_SERVER('REQUEST_METHOD') === 'POST') {
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['$message'];

        $data = "Name : $name\nEmail: $email\nMessage: $message\n";

        $file = fopen("contacts.txt","a");
        fwrite($file, $data);
        fclose($file);

        echo "Form Submitted Successfully";
    }
}


?>