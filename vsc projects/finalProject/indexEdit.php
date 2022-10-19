<?php

include "./controllers/UrmoBazeController.php";

$edit = false;
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    if (isset($_POST['save'])) {
        UrmoBazeController::store();
        header("Location: ./indexEdit.php");
        die;
    }

    if (isset($_POST['edit'])) {
        $urmoBaze = UrmoBazeController::show();
        $edit = true;
    }
    if (isset($_POST['update'])) {
        UrmoBazeController::update();
        header("Location: ./indexEdit.php");
        die;
    }
    if (isset($_POST['destroy'])) {
        UrmoBazeController::destroy();
        header("Location: ./indexEdit.php");
        die;
    }
}


$urmoBazes = UrmoBazeController::index();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title></title>
    <?php
    include("pagesEdit/navEdit.php");
    ?>
</head>

<body>
    <?php
    include("pagesEdit/itemsEdit.php");
    ?>




    <?php
    include("footer.php");
    ?>

    <style>
        <?php include 'style.css'; ?>
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
</body>
</html>