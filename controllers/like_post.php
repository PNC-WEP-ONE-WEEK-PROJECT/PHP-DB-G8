<?php
    require_once("../models/post.php");
    // $user_id=$_GET['id_user'];
    $post_id=$_GET['id_post'];

    like_post(3,$post_id);
    

    header('location: /../home.php');