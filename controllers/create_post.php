<?php 
    require_once("../templates/header.php");
    require_once("../models/post.php");

// -----------
    $description_post = $_POST['description'];
    // $get_user_id = $_POST["post_id"];
     // UPLOAD IMAGE
    $target = "../images/" .$_FILES['myfile']['name'];
    move_uploaded_file($_FILES['myfile']['tmp_name'],$target);
    $file_name = $_FILES['myfile']['name'];



createPost($description_post,$file_name,1);

header('location: /home.php');



