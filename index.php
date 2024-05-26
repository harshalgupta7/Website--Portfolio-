<?php


// files for mail smtp service 
require '\PHPMailer-master\src\Exception.php';
require '\PHPMailer-master\src\PHPMailer.php';
require '\PHPMailer-master\src\SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
?>

<!DOCTYPE html>
<html lang="en">
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
                <a href="about.php" class="menu-item">About Me</a>
                <a href="projects.php" class="menu-item">Projects</a>
                <a href="resume.php" class="menu-item">Resume</a>
                <a href="contact.php" class="menu-item">Contact</a>
            </div>
        </div>
    </header>

    <main>
        <section id="home">
            <div><h1>Hello <> <br>
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
// if($_SERVER['REQUEST_METHOD'] === 'POST'){
//     if(isset($_POST['submit'])){
//         $name = $_POST['name'];
//         $email = $_POST['email'];
//         $message = $_POST['$message'];

//         $mail = new PHPMailer(true);
//         try {
            
//         }
//     }
// }
?>

