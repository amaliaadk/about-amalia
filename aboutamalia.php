<?php
$name = "Amalia Dewi Kusumaningrum";
$expertise = "Front-end Developer";
$hobbies = "Coding, Listening to Music";
$education = "Front-end Developer Bootcamp - Neuversity | 2024";
$bio = "I, Amalia, am a front-end developer with an undying passion for creating innovative digital experiences. With a background in previous front-end developer bootcamps, I have developed expertise in HTML, CSS, and React. I am motivated to continue learning and honing my skills in building intuitive and engaging user interfaces. My goal is to join a team dedicated to building digital products that can have a positive impact on society.";
$skills = array("HTML", "CSS", "React", "User Interface", "C++");
$certifications = "Responsive Web Design - freeCodeCamp";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>

    <style>
        body {
            font-family: 'Merriweather', serif;
            background-color: #FAE3E3;
            color: black;
            padding: 0;
            margin: 0;
        }

        header {
            background-color: #550000;
            text-align: center;
            font-size: 35px;
            font-weight: bold;
            color: white;
            padding: 60px 0;
            font-family: 'Merriweather', serif;
            letter-spacing: 1.5px;
        }

        .container {
            display: flex;
        }

        .sidebar {
            background-color: #EAEAEA;
            width: 20%;
            padding: 20px;
            height: auto;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }

        .sidebar a {
            color: #550000;
            text-decoration: none;
            font-size: 18px;
            display: block;
            margin-bottom: 15px;
            transition: color 0.3s;
        }

        .sidebar a:hover {
            color: #333333;
        }

        .content {
            background-color: whitesmoke;
            width: 80%;
            padding: 40px;
        }

        .photo {
            text-align: center;
            margin-bottom: 30px;
        }

        .photo img {
            border-radius: 50%;
            border: 3px solid #550000;
            width: 150px;
            height: 150px;
            object-fit: cover;
        }

        .section {
            margin-bottom: 30px;
        }

        .section h3 {
            font-size: 24px;
            border-bottom: #ffc8c8;
            padding-bottom: 10px;
        }

        .section p,
        .section ul {
            font-size: 18px;
            line-height: 1.6;
        }

        .section a {
            text-decoration: none;
            color: black;
        }

        .section a:hover {
            color: #550000;
            text-decoration: underline;
        }

        hr {
            border: 3px solid #550000;
            margin: 30px 0;
        }

        footer {
            background-color: #550000;
            padding: 25px;
            text-align: center;
            color: white;
        }

        @media (max-width: 600px) {

            .container {
                flex-direction: column;
            }

            .sidebar,
            .section {
                width: 100%;
                height: auto;
                box-shadow: none;
            }

            .photo img {
                width: 120px;
                height: 120px;
            }
        }
    </style>

</head>

<body>

    <header>
        Hello, I'm Amalia
    </header>

    <div class="container">
        <div class="sidebar">
            <a href="#education">Education</a>
            <a href="#skills">Skills</a>
            <a href="#certifications">Certifications</a>
            <a href="#contact">Contact</a>
        </div>

        <div class="content">
            <div class="photo">
                <img src="profile.jpg" alt="Profile Photo">
                <h2><?php echo $name; ?></h2>
                <p style="font-size: 20px;"><?php echo $expertise; ?></p>
                <p>Hobbies : <?php echo $hobbies; ?></p>
            </div>

            <div class="section">
                <h3>About Me</h3>
                <p><?php echo $bio; ?></p>
            </div>

            <hr>
            <div class="section" id="education">
                <h3>Education</h3>
                <p><?php echo $education; ?></p>
            </div>

            <hr>
            <div class="section" id="skills">
                <h3>Skills</h3>
                <ul>
                    <?php foreach ($skills as $skill) {
                        echo "<li>$skill</li>";
                    } ?>
                </ul>
            </div>

            <hr>
            <div class="section" id="certifications">
                <h3>Certifications</h3>
                <ul>
                    <li><a href="https://www.freecodecamp.org/certification/amaliaadk/responsive-web-design" target="_blank">
                            <?php echo $certifications; ?></li>
                    <li><a href="https://www.coursera.org/account/accomplishments/verify/A5FGQ91W2WU8" target="_blank">Step Korean by Yonsei University - Coursera</a></li>
                    <li><a href="https://www.coursera.org/account/accomplishments/verify/28QKPHLU0CPP">Learn to Speak Korean 1 by Yonsei University - Coursera</a></li>
                    <li><a href="https://www.coursera.org/account/accomplishments/verify/UXDW0AD6IFFO" target="_blank">A Bridge to the World: Korean Language for Beginners I by Sungkyunkwan University - Coursera</a></li>
            </div>

            <hr>
            <div class="section" id="contact">
                <h3>Contact</h3>
                <a href="https://wa.me/6287794425656" target="_blank">Let's Connect!</a>
            </div>
        </div>
    </div>

    <footer>
        © Copyright 2024 | <?php echo $name; ?>
    </footer>
</body>

</html>
