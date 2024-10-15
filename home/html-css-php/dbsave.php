<?php
$Answers = json_decode($_POST['Answers']);
require('dbconnect.php');
dbsave($Answers);

if(isset($_POST['heart']) == true){
    header('Location: 1-heart.php');
    exit();
}

if(isset($_POST['society']) == true){
    header('Location: 2-society.php');
    exit();
}

if(isset($_POST['study']) == true){
    header('Location: 3-study.php');
    exit();
}

if(isset($_POST['body']) == true){
    header('Location: 4-body.php');
    exit();
}

if(isset($_POST['live']) == true){
    header('Location: 5-live.php');
    exit();
}

if(isset($_POST['around']) == true){
    header('Location: 6-around.php');
    exit();
}

if(isset($_POST['progress']) == true){
    header('Location: progress_home.html');
    exit();
}
?>