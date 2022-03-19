
<!-- Create posts -->
<?php
require_once('database.php');

// Function Creating Post===========================================================================
function createPost($description_post,$file_name,$userID)
{
    global $db;
    $description_post= $_POST['description'];
    $statement=$db->prepare("INSERT INTO userposts (description_post,images, id_user) VALUES(:description,:images,:userID)");
    $statement->execute([
        ':description'=>$description_post,
        ':images'=>$file_name,
        ':userID' => $userID
    ]);
    return ($statement->rowCount()==1);
}

// Function Get all Posts (attribute) from Posts table=============================================
function getPosts()
{
    global $db;

    $statement = $db->prepare("SELECT id_post, description_post, date_post, images FROM userposts ORDER BY id_post DESC;");
    $statement->execute();
    $postItems = $statement->fetchAll();
    return $postItems;
}

// Function Get only id from posts table===========================================================
function getPostById($post_id)
{
    global $db;
    $statement = $db->prepare("SELECT description_post from userposts WHERE id_post=:id_ofposts;");
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
    $statement=$db->prepare("DELETE FROM userposts WHERE id_post=:id;");
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
    $statement = $db->prepare("UPDATE userposts SET description_post=:post_description,images=:myimg WHERE id_post=:postID");
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
    $statement = $db->prepare("UPDATE userposts SET description_post=:post_description WHERE id_post=:postID");
    $statement->execute([
        ':post_description'=> $description_post,
        ':postID'=> $id_post,
    ]);
    return $statement->rowCount() == 1;
}