<?php
    require_once("../models/post.php");
    // $user_id=$_GET['id_user'];
    $post_id=$_GET['id_post'];
    $comment_user=$_POST['user_message'];

    comment_post(3,$post_id,$comment_user);
    

    header('location: /../home.php');