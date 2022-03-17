<?php 
    require_once("../templates/header.php");
    require_once("../models/post.php");


// -----------
    $drscripitionUser = $_POST['description'];
    // $get_user_id = $_POST["post_id"];
     // UPLOAD IMAGE
    $target = "../images/" .$_FILES['myfile']['name'];
    move_uploaded_file($_FILES['myfile']['tmp_name'],$target);
    $file_name = $_FILES['myfile']['name'];



createItem($drscripitionUser,$file_name);

header('location: /home.php');



