<?php

include 'config.php';
// files for mail smtp service
require "D:\lampp\htdocs\Website template\PHPMailer-master\PHPMailer-master\src\PHPMailer.php";
require "D:\lampp\htdocs\Website template\PHPMailer-master\PHPMailer-master\src\Exception.php";
require "D:\lampp\htdocs\Website template\PHPMailer-master\PHPMailer-master\src\SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// enabling error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
<!-- This is required for intant refresh of the website -->
<?php header("Cache-Control: no-cache, must-revalidate"); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <div class="nav_bar">
            <div></div>
            <div class="menu">
                <a href="<?php echo $ROOT_URL . 'about.php'; ?>" class="menu-item">About Me</a>
                <a href="projects.php" class="menu-item">Projects</a>
                <a href="resume.php" class="menu-item">Resume</a>
                <a href="contact.php" class="menu-item">Contact</a>
            </div>
        </div>
    </header>

    <main>
        <section id="home">
            <div>
                <h1>Hello <> <br>
                        I'm Harshal </h1>
                <p>I'm a Backend Software Engineer</p>
            </div>
            <div>
                <span><img src="character.png"> </span>
            </div>
        </section>


        <section id="about">
            <h2>About Us</h2>
            <p>Information about us.</p>
        </section>

        <section id="services">
            <h2>Our Services</h2>
            <p>Details of services offered.</p>
        </section>

        <section id="contact">
            <h2>Contact Us</h2>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Harshal Gupta</p>
    </footer>

    <script src="script.js"></script>
</body>

</html>

<!-- ----------------------------------------Mail script------------------------------>
<?PHP
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['$message'];

        $mail = new PHPMailer(true);
        try {
            // sender api config
            // ID - 278217281275-pm36p5ctinmldt32stu6op9dibadgjea.apps.googleusercontent.com
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'example@gmail.com';
            $mail->Password = 'example';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // receiver mail and id
            $mail->setFrom('youremail@gmail.com', 'your name');
            $mail->addAddress('receipent@gmail.com', 'recipient name');

            //content\
            $mail->isHTML(true);
            $mail->Subject = 'Confirmation';
            $mail->Body = 'this is body';
            $mail->AltBody = ' this is for non html clients';

            $mail->send();
        } catch (Exception $e) {
            echo 'message cannnot be sent' . $e->getMessage();
        }
    }
}

    // user authentication set up
    
?>