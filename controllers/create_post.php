<?php 
    require_once("../templates/header.php");
    require_once("../models/post.php");


$drscripitionUser = $_POST['description'];
createItem($drscripitionUser);

header('location: /home.php');