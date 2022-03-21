<?php
/**
 * Your code here
 */
require_once('../models/post.php');
$com_id =$_POST['comments_id'];
$post_id =$_POST['posts_id'];
$deleteSucess= deleteComment($com_id,$post_id);

if($deleteSucess){
    header('location: /home.php');//when we remove it have don't show the wirte bg

}