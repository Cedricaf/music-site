<?php
require_once('data.php');
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>musiclibrary</title>
</head>

<header>
    Musiclibrary
</header>

<body>
    <div class="content">
        <?php
        foreach ($musicLibrary as $single) {
            echo $single['title'].
            include('card.php');
        }


        ?>
    </div>

</body>

</html>