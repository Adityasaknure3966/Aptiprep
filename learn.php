<?php
// learn_aptitude.php
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn Aptitude</title>
    <style>
        <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        nav {
            background-color: #333;
            padding: 10px;
            text-align: center;
        }
        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }
        nav ul li {
            display: inline;
            margin-right: 20px;
        }
        nav ul li a {
            color: white;
            text-decoration: none;
        }
        header {
            background-color: #6c7ae0;
            color: white;
            padding: 20px;
            text-align: center;
        }
        section {
            padding: 20px;
            max-width: 800px;
            margin: auto;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        ul.topics {
            list-style: none;
            padding: 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        ul.topics li {
            width: 45%;
            margin-bottom: 20px;
            background-color: #eee;
            border-radius: 5px;
            overflow: hidden;
            transition: transform 0.3s ease;
        }
        ul.topics li:hover {
            transform: scale(1.05);
        }
        ul.topics li a {
            text-decoration: none;
            color: #333;
            display: block;
            padding: 10px;
            display: flex;
            align-items: center;
        }
        ul.topics li a img {
            width: 200px;
            height: 100px;
            margin-top: 10px;
            margin-left: 20px;
            transition: transform 0.3s ease;
        }
        ul.topics li a:hover img {
            transform: rotate(20deg);
        }
        ul.topics li a .topic-name {
            font-size: 18px;
            font-weight: bold;
        }
    
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        nav {
            background-color: #333;
            padding: 10px;
            text-align: center;
        }
        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }
        ul.topics {
            list-style: none;
            padding: 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        ul.topics li {
            width: 45%;
            margin-bottom: 20px;
            background-color: #eee;
            border-radius: 5px;
            overflow: hidden;
            transition: transform 0.3s ease;
        }
        ul.topics li:hover {
            transform: scale(1.05);
        }
        ul.topics li a {
            text-decoration: none;
            color: #333;
            display: block;
            padding: 10px;
            display: flex;
            align-items: center;
        }
        ul.topics li a img {
            width: 50px; /* Fixed width */
            height: 50px; /* Fixed height */
            margin-right: 15px;
            transition: transform 0.3s ease;
        }
        ul.topics li a:hover img {
            transform: rotate(20deg);
        }
        ul.topics li a .topic-name {
            font-size: 18px;
            font-weight: bold;
        }
        .download-btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background-color: #6c7ae0;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .download-btn:hover {
            background-color: #0056b3;
        }

    </style>
</head>
<body>
    <header>
        <h1>Learn Aptitude</h1>
        <p>Improve your problem-solving skills with aptitude lessons.</p>
    </header>

    <section>
        <table>

      
        <tr><td><h2>Download Company's PYQ Papers</h2></td><td><a href="C:\xampp1\htdocs\online-examination-systen-in-php-master\Accenture.pdf" download class="download-btn">Download</a></td></tr>
        <tr><td><h2>Aptitude Topics</h2></td></tr>
        <table>
        <ul class="topics">
            <li><a href="topic_arithmetic.php">
                <img src="C:\xampp1\htdocs\online-examination-systen-in-php-master\image\arithmetic.png" alt="Arithmetic Logo">
                <span class="topic-name">Arithmetic</span>
            </a></li>
            <li><a href="topic_algebra.php">
                <img src="C:\xampp1\htdocs\online-examination-systen-in-php-master/algebra logo.png" alt="Algebra Logo">
                <span class="topic-name">Algebra</span>
            </a></li>
            <li><a href="topic_geometry.php">
                <img src="geometry.png" alt="Geometry Logo">
                <span class="topic-name">Geometry</span>
            </a></li>
            <li><a href="topic_number_system.php">
                <img src="number_system.png" alt="Number System Logo">
                <span class="topic-name">Number System</span>
            </a></li>
            <li><a href="topic_data_interpretation.php">
                <img src="data_interpretation.png" alt="Data Interpretation Logo">
                <span class="topic-name">Data Interpretation</span>
            </a></li>
            <li><a href="topic_logical_reasoning.php">
                <img src="logical_reasoning.png" alt="Logical Reasoning Logo">
                <span class="topic-name">Logical Reasoning</span>
            </a></li>
            <li><a href="topic_verbal_ability.php">
                <img src="verbal_ability.png" alt="Verbal Ability Logo">
                <span class="topic-name">Verbal Ability</span>
            </a></li>
            <li><a href="topic_probability.php">
                <img src="probability.png" alt="Probability Logo">
                <span class="topic-name">Probability</span>
            </a></li>
        </ul>
    </section>
</body>
</html>
