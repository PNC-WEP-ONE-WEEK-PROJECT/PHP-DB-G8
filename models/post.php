<?php
require_once('database.php');

function createItem($drscripitionUser)
{
    global $db;
    $drscripitionUser= $_POST['description'];
    $statement=$db->prepare("INSERT INTO posts (description) VALUES(:description)");
    $statement->execute([
        ':description'=>$drscripitionUser
    ]);
    return ($statement->rowCount()==1);

}
// database connection



