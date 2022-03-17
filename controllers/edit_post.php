<?php
require_once('../models/post.php');


$id_post= $_POST['postID'];
$description_post= $_POST['descripe'];


editPost($id_post, $description_post);
header('location: /home.php');