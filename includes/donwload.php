<section id="donwloadPage">


    <h1 class="idDown">Contents to download</h1>

    <div class="text">
    <p>In this page we can find useful documents to help my assessment</p>
    </div>



    <?php

        $directory = "./includes/files/portfolio";

        $workingDir = opendir($directory);

        echo "<div class='contentDow'>";
        echo "<h3>Portfolio 2022/2023</h3>";
        while ($curFile = readdir($workingDir)) {
             if (substr($curFile, 0, 1) == '.') {
            }else {
                 echo "<p>".$curFile . "</p><br />";
                 echo '<img src="./img/files.png" width="200" alt="' . $curFile . '" class="img">';
                 echo '<p><a href="index.php?path=includes/files/portfolio=' . urlencode($curFile) . '">Download</a></p>';
             }
        }
        echo "</div>";
    ?>




    <?php

    $directory = "./includes/files/feedback1And2";

    $workingDir = opendir($directory);

    echo "<div class='contentDow'>";
    echo " <h3>Feedback Form Period 1 and Period 2</h3>";
    while ($curFile = readdir($workingDir)) {
        if (substr($curFile, 0, 1) == '.') {
        }else {
            echo "<p>".$curFile . "</p><br />";
            echo '<img src="./img/files.png" width="200" alt="' . $curFile . '" class="img">';
            echo '<p><a href="index.php?path=includes/files/feedback1And2=' . urlencode($curFile) . '">Download</a></p>';
        }
    }
    echo "</div>";
    ?>



    <?php

    $directory = "./includes/files/PlanOfApproach";

    $workingDir = opendir($directory);

    echo "<div class='contentDow Plan'>";
    echo "<h3>Plan of approach</h3>";
    while ($curFile = readdir($workingDir)) {
        if (substr($curFile, 0, 1) == '.') {
        }else {
            echo "<p>".$curFile . "</p><br />";
            echo '<img src="./img/files.png" width="200" alt="' . $curFile . '" class="img">';
            echo '<p><a href="index.php?path=includes/files/PlanOfApproach=' . urlencode($curFile) . '">Download</a></p>';
        }
    }
    echo "</div>";
    ?>



    <?php

    $directory = "./includes/files/Presentation";

    $workingDir = opendir($directory);

    echo "<div class='contentDow Plan'>";
    echo " <h3>Presentation</h3>";
    while ($curFile = readdir($workingDir)) {
        if (substr($curFile, 0, 1) == '.') {
        }else {
            echo "<p>".$curFile . "</p><br />";
            echo '<img src="./img/files.png" width="200" alt="' . $curFile . '" class="img"><br>';
            echo '<p><a href="index.php?path=includes/files/Presentation=' . urlencode($curFile) . '">Download</a></p>';
        }
    }
    echo "</div>";
    ?>



    <?php

    $directory = "./includes/files/meetings";

    $workingDir = opendir($directory);

    echo "<div class='contentDow Plan'>";
    echo "<h3>Meeting techniques</h3>";
    while ($curFile = readdir($workingDir)) {
        if (substr($curFile, 0, 1) == '.') {
        }else {
            echo "<p>".$curFile . "</p><br />";
            echo '<img src="./img/files.png" width="200" alt="' . $curFile . '" class="img"><br>';
            echo '<p><a href="index.php?path=includes/files/meetings=' . urlencode($curFile) . '">Download</a></p>';
        }
    }
    echo "</div>";
    ?>
</section>


