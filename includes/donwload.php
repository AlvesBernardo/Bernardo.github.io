<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Bernardo Potfolio</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='styles/styles.css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>
<body>

<header>

    <nav class="navBar">
        <ul class="pt-5">

            <!-- "?" is for the get parameter in the index to navigate -->
            <li><a href="index.php" class="link">Home</a></li>
            <li><a href=includes/donwload.php class="link">Files</a></li>

        </ul>
    </nav>


</header>

<script>

    //preparing the jquery
    //with this script you can donwload the menu version of the pdf. If this would be html you could change the file you are downloading.
    $(document).ready(function () {
        $('img').click(function (e) {
            e.preventDefault();  //stop the browser from following
            var alt = $(this).attr("alt");

            window.location.href = alt; //download the file
        });
    });

</script>

<section id="donwloadPage">


    <h1 class="idDown">Contents to download</h1>

    <div class="text">
        <p>In this page we can find useful documents to help my assessment</p>
    </div>


    <?php

    $directory = "./includes/files/portfolio";

    $workingDir = opendir($directory);

    echo "<div class='contentDow'>";
    echo "<h3 class='idOfType'>Portfolio 2022/2023</h3>";
    while ($curFile = readdir($workingDir)) {
        if (substr($curFile, 0, 1) == '.') {
        } else {
            echo "<p>" . $curFile . "</p><br />";
            echo '<img src="./img/files.png" width="80" alt="'. $directory."/" . $curFile . '" class="img">';

        }
    }
    echo "</div>";
    ?>




    <?php

    $directory = "./includes/files/feedback1And2";

    $workingDir = opendir($directory);

    echo "<div class='contentDow'>";
    echo " <h3 class='idOfType'>Feedback Form Period 1 and Period 2</h3>";
    while ($curFile = readdir($workingDir)) {
        if (substr($curFile, 0, 1) == '.') {
        } else {
            echo "<p>" . $curFile . "</p><br />";
            echo '<img src="./img/files.png" width="80" alt="'. $directory."/"  . $curFile . '" class="img">';

        }
    }
    echo "</div>";
    ?>



    <?php

    $directory = "./includes/files/PlanOfApproach";

    $workingDir = opendir($directory);

    echo "<div class='contentDow Plan'>";
    echo "<h3 class='idOfType'>Plan of approach</h3>";
    echo "<div class='subDiv'>";
    while ($curFile = readdir($workingDir)) {
        if (substr($curFile, 0, 1) == '.') {
        } else {

            echo "<p>" . $curFile . "</p><br />";
            echo '<img src="./img/files.png" width="80" alt="' . $directory."/" . $curFile . '" class="img">';

        }
    }
    echo "</div>";
    echo "</div>";
    ?>



    <?php

    $directory = "./includes/files/Presentation";

    $workingDir = opendir($directory);

    echo "<div class='contentDow Plan'>";
    echo " <h3 class='idOfType'>Presentation</h3>";
    while ($curFile = readdir($workingDir)) {
        if (substr($curFile, 0, 1) == '.') {
        } else {
            echo "<p>" . $curFile . "</p><br />";
            echo '<img src="./img/files.png" width="80" alt="'. $directory."/" . $curFile . '" class="img"><br>';

        }
    }
    echo "</div>";
    ?>



    <?php

    $directory = "./includes/files/meetings";

    $workingDir = opendir($directory);

    echo "<div class='contentDow Plan'>";
    echo "<h3 class='idOfType'>Meeting techniques</h3>";
    while ($curFile = readdir($workingDir)) {
        if (substr($curFile, 0, 1) == '.') {
        } else {
            echo "<p>" . $curFile . "</p><br />";
            echo '<img src="./img/files.png" width="80" alt="'. $directory."/" . $curFile . '" class="img"><br>';

        }
    }
    echo "</div>";
    ?>
</section>


