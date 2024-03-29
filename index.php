<?php
    session_start();
    require_once "database.php";
    
    if (isset($_SESSION["user"])){
        header("Location: index.html");
        exit(); // Ensure script stops execution after redirection
    } 

    if(isset ($_POST["login"])){
        $email = $_POST["email"];
        $password = $_POST["password"];

        $sql = "SELECT id, password FROM user WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_array($result, MYSQLI_ASSOC);

        if ($user) {
            if(password_verify($password, $user["password"])) {
                $_SESSION["user_id"] = $user["id"];
                echo "<script>alert('Successfully logged in.');</script>";
                header("Location: message.php");
                exit();
            } else {
                echo "<div class='alert alert-danger'> Password does not match </div>";
            }
        } else {
            echo "<div class='alert alert-danger'> Email does not match </div>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="assets/js/scripts.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <title>Ken Zamodio</title>
</head>
<body>

    <header>
        <div>
            <a href="#">
                <img src="assets/pics/logo.svg" alt="Logo">
                <p>Ken</p>
            </a>
        </div>
        <nav>
            <ul>
                <li><a href="#about">About</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#resume">Resume</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
        <div class="social-icons">
            <!-- Add your social icons here -->
            <a href="https://www.facebook.com/kenaixrochz" class="icon-container" target="_blank"><img src="assets/pics/icons8-facebook.svg" alt="Facebook"></a>
            <a href="https://www.instagram.com/sheu_mai/" class="icon-container" target="_blank"><img src="assets/pics/icons8-instagram.svg" alt="Instagram"></a>

        </div>
    </header>

    <section id="about">
        <div id="about-content">
            <div class="about-text">
                <h2>About Me</h2>
                <p>
                    Hello there! 👋 I'm Ken, a passionate individual with a love for coding, gaming, and the joyful moments spent with my dog, Tensai. Whether it's crafting innovative code, conquering gaming quests, or enjoying the company of my four-legged friend, I'm always up for exciting adventures in the digital and real world.
                </p>
            </div>
            <div class="about-image">
            <img src="assets/pics/me.png" alt="Ken's Image" width="250" height="250">
            </div>
        </div>
    </section>
    

    <section id="skills">
        <h2>Skills</h2>
        <div class="skill-item">
            <div class="skill-bar-container">
                <span class="skill-label">HTML:</span>
                <div class="skill-bar">
                    <div class="skill-progress" style="width: 60%;"></div>
                    <div class="percentage-label">60%</div>
                </div>
            </div>
        </div>
        <div class="skill-item">
            <div class="skill-bar-container">
                <span class="skill-label">CSS:</span>
                <div class="skill-bar">
                    <div class="skill-progress" style="width: 65%;"></div>
                    <div class="percentage-label">65%</div>
                </div>
            </div>
        </div>
        <div class="skill-item">
            <div class="skill-bar-container">
                <span class="skill-label">JavaScript:</span>
                <div class="skill-bar">
                    <div class="skill-progress" style="width: 30%;"></div>
                    <div class="percentage-label">30%</div>
                </div>
            </div>
        </div>
        <div class="skill-item">
            <div class="skill-bar-container">
                <span class="skill-label">Python:</span>
                <div class="skill-bar">
                    <div class="skill-progress" style="width: 25%;"></div>
                    <div class="percentage-label">25%</div>
                </div>
            </div>
        </div>
    
        <div class="skill-item">
            <div class="skill-bar-container">
                <span class="skill-label">Java:</span>
                <div class="skill-bar">
                    <div class="skill-progress" style="width: 20%;"></div>
                    <div class="percentage-label">20%</div>
                </div>
            </div>
        </div>
    
        <div class="skill-item">
            <div class="skill-bar-container">
                <span class="skill-label">MySQL:</span>
                <div class="skill-bar">
                    <div class="skill-progress" style="width: 35%;"></div>
                    <div class="percentage-label">35%</div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="resume">
        <h2>Resume</h2>
        <div id="resume-content">
            <p>Download my resume:</p>
            <a href="/pics/resume.pdf" download="resume.pdf">
                <button>Download Resume</button>
            </a>
        </div>
    </section>
    <section id="form">
    <p>If you want to commission:</p>
    <form action="index.php" method="post">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" class= "form-control" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" class= "form-control" required>
            </div>

            <div class="form-btn">
                <input type="submit" value="Login" name="login" class="btn btn-primary">
            </div>
        </form>
        <div><p>Not Registered Yet? <a href="registration.php">Register Here</a></p></div>
        </div>
    </section>
    <footer id="contact" style="background-color: #1a1a1a; color: #fff; padding: 50px 400px;">
        <div class="social-icons">
            <!-- Facebook Icon -->
            <div class="icon-container">
                <a href="https://www.facebook.com/kenaixrochz" target="_blank" rel="noopener noreferrer">
                    <img src="assets/pics/icons8-facebook.svg" alt="Fb">
                </a>
            </div>
            <!-- Instagram Icon -->
            <div class="icon-container">
                <a href="https://www.instagram.com/sheu_mai" target="_blank" rel="noopener noreferrer">
                    <img src="assets/pics/icons8-instagram.svg" alt="Insta">
                </a>
            </div>
        </div>
        <div>
            <h2>Contact Information</h2>
            <p>Email: kenaixrochz@gmail.com</p>
            <p>Phone: +63 0952 285 2059</p>
        </div>
        <div class="container">
    </footer>

</body>
</html>
