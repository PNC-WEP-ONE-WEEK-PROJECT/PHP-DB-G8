<?php
/**
 * Your code here
 */
require_once('../models/post.php');
$id =$_GET['id'];
$deleteSucess= deleteItem($id);

if($deleteSucess){
    header('location: /home.php');//when we remove it have don't show the wirte bg

}else{
    echo"Cannot delete item with id ".$id;
}