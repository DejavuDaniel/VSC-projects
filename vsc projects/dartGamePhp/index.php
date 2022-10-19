<?php session_start(); 

if (! isset($_SESSION['play1'])) {
    $_SESSION['play1'] = [];
}
if (! isset($_SESSION['play2'])) {
    $_SESSION['play2'] = [];
}
if(! isset($_SESSION['count'])){
    $_SESSION['count'] = 0;
} 
if(! isset($_SESSION['playerNameOne'])){
    $_SESSION['playerNameOne'];
} 
if(! isset($_SESSION['playerNameTwo'])){
    $_SESSION['playerNameTwo'];
}
if(! isset($_SESSION['Winner'])){
    $_SESSION['Winner'];
}
if(! isset($_SESSION['dot'])){
    $_SESSION['dot'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"
</head>
<body>
    <h1 class="gameLogo">Darts Game</h1>




<?php


    if(!isset($_SESSION['playerNameOne'])) {
        if(isset($_POST['Player_one'])) {
            $_SESSION['playerNameOne'] = $_POST['Player_one'];
            $_SESSION['playerNameTwo'] = $_POST['Player_two'];
            if(!isset($_SESSION['Winner'])) {
                include "pages/game.php";
            } else {
                include "pages/winner.php";
            }

        } else {
            include "pages/login.php";
        }
    } else {
        if(! isset($_SESSION['Winner'])){
        include "pages/game.php";
        } else {
            include "pages/winner.php";
        }
    }

    ?> 
<style>
<?php include 'style.css'; ?>
</style>

</body>
</html>