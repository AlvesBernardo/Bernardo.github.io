<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Bernardo Potfolio</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='styles/styles.css'>
    <script src='.'></script>
</head>
<body>
<div id="content">
<header>
    <?php
    //including tha nav bar once in the index page so it stays here for the rest of the pages
    include_once "includes/navBar.php";

    ?>
</header>




<?php

// defining an empty var for including pages into index page
$page = "";

// getting the get parameter from url
if (isset($_GET['page'])) {
    $page = $_GET['page'];

}

//depending on the certain par we include a certain page

if ($page ==="Home"){
    include_once "includes/startingPape.php";
}else if($page ==="Download") {   
    include_once "includes/donwload.php";
}else {
    include_once "includes/startingPape.php";
}


?>
</div>
</body>
<!--
<footer>

    <?php

/*    //including the footer

   include_once "includes/footer.html";
*/
?>
</footer>
-->

</html>