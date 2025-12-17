<?php
    require_once 'functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./favicon.svg" type="image/x-icon">
    <title>Error 404 - The Next MCU Movie</title>
    <link rel="stylesheet" href="./style.css">
    <style>
        body{
            width: 100vw;
            height: 100dvh;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        h1{
            width: 100%;
            text-align: center;
        }

        img{
            padding-bottom: 1rem;
        }
    </style>
</head>
<body>
    <img src="./img/404.jpg" alt="Error 404 - The Next MCU Movie" width="200" height="200">
    <h1>Page not found</h1>
    <h2>404</h2>
    <a href="/" class="flex my link prev">
        <?php render_template('iconChevron') ?>
        Go to home
    </a>
</body>
</html>