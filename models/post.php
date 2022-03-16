
<!-- Create posts -->
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


// Get all data from table posts.
function itemsOfPosts()
{
    global $db;
    $statement = $db->prepare("SELECT post_id, description, date_post, images from posts;");
    $statement->execute();
    $postItems = $statement->fetchAll();
    return $postItems;
}

// Display posts.

/**
 * Get a single from postItems
 * @return array of posts
 */

function getItemPostsById($post_id)
{
    global $db;
    $statement = $db->prepare("SELECT description from posts WHERE id=:id_ofposts;");
    $statement->execute([
        'id_ofposts' => $post_id
    ]);
    $itemPost = $statement->fetch();
    return $itemPost;

}


// delete element
function deleteItem($id)
{
    global $db;
    $statement=$db->prepare("DELETE FROM posts WHERE post_id=:id;");
    $statement->execute(
        [
            ':id'=>$id
        ]);
    return ($statement-> rowCount()==1);
}

