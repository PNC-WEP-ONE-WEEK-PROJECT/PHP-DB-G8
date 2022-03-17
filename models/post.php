
<!-- Create posts -->
<?php
require_once('database.php');

// Function Creating Post===========================================================================
function createPost($description_post,$file_name)
{
    global $db;
    $description_post= $_POST['description'];
    $statement=$db->prepare("INSERT INTO posts (description,images) VALUES(:description,:images)");
    $statement->execute([
        ':description'=>$description_post,
        ':images'=>$file_name
    ]);
    return ($statement->rowCount()==1);
}

// Function Get all Posts (attribute) from Posts table=============================================
function getPosts()
{
    global $db;
    $statement = $db->prepare("SELECT post_id, description, date_post, images FROM posts ORDER BY post_id DESC;");
    $statement->execute();
    $postItems = $statement->fetchAll();
    return $postItems;
}

// Function Get only id from posts table===========================================================
function getPostById($post_id)
{
    global $db;
    $statement = $db->prepare("SELECT description from posts WHERE post_id=:id_ofposts;");
    $statement->execute([
        'id_ofposts' => $post_id
    ]);
    $itemPost = $statement->fetch();
    return $itemPost;

}

// Function Delete element by using id of table posts.
function deletePost($id)
{
    global $db;
    $statement=$db->prepare("DELETE FROM posts WHERE post_id=:id;");
    $statement->execute(
        [
            ':id'=>$id
        ]);
    return ($statement-> rowCount()==1);
}

// Function use to edit both image and description
function editPost($id_post, $description_post,$image)
{
    global $db;
    $statement = $db->prepare("UPDATE posts SET description=:post_description,images=:myimg WHERE post_id=:postID");
    $statement->execute([
        ':post_description'=> $description_post,
        ':postID'=> $id_post,
        ':myimg'=>$image
        
    ]);
    return $statement->rowCount() == 1;
}

// Function use to edit only description
function editPosts($id_post, $description_post)
{
    global $db;
    $statement = $db->prepare("UPDATE posts SET description=:post_description WHERE post_id=:postID");
    $statement->execute([
        ':post_description'=> $description_post,
        ':postID'=> $id_post,
    ]);
    return $statement->rowCount() == 1;
}