
<?php
/**
 * Your code here
 */
require_once("templates/header.php");
require_once("models/post.php");
?>
<!-- go to input post -->
<div class="coverElementPost">
    <div class="user_decri">
        <img src="images/user_ph.png" alt="" class="pro_user" >
        <form action="../controllers/create_post.php"  method="post" class="form_staus">
            <input type="text" name="description" class="input"  placeholder="What are you thinking about..............">
            <input type="submit"  value="post" class="btn_input">
        </form>
    </div>
    <div class="line"></div>
   
    <div class="button_post">
        <a href="views/post_view.php"><i class="fas fa-file-image img_btnpost"></i> Photo/Video</a> 
    </div>

</div>

<!-- form display post -->
<?php
$postImformation = getPosts();
foreach ($postImformation as $informationOfPost):
?>

<div class="showElementPost ">
    <div class="header_card">
        <div class="user_decri">
            <img src="images/user_ph.png" alt="" class="pro_user" >
            <div class="infor">
                <div class="user_name">Sarath Orn</div>
                <div class="date">
                    <?php date_default_timezone_set('Asia/Phnom_Penh'); ?>
                    <?= $informationOfPost['date_post'] = date("D M j Y G:i:s a"); ?>
                </div>

            </div>
        </div>
        <div class="item_crud">
           
            <a href="views/edit_view.php?id=<?php echo $informationOfPost['id_post']; ?>"><i class="fas fa-edit img_btnpost edit"></i></a>
            <a href="controllers/delete_post.php?id=<?php echo $informationOfPost['id_post']; ?>"><i class="fas fa-trash img_btnpost delete"> </i></a>

            
        </div>
        
    </div>
    <div class="infor_user">
        
    <?php 
        if (!empty($informationOfPost['images'])) {
    ?>
        <div class="not_status"><?php echo $informationOfPost['description_post']; ?></div>    

    <?php    
        }else{
    ?>
        <div class="status"><?php echo $informationOfPost['description_post']; ?></div>   

    <?php
        }
    ?>
    
        
    </div>
    <div class="cover_photo">
        <img src="images/<?php  echo $informationOfPost['images'];?>" class="photo_post" alt="">
    </div>

   

    <div class="line"></div>
    <div class="like_place">
        1LIKE
    </div>
    <div class="element_like_comment">
        <div>
            <button class="like_element"><i class="fas fa-thumbs-up img_btnpost"></i> Like</button> 
        </div>
        <div>
            <button class="comment_element"><i class="fas fa-comment-alt img_btnpost"></i> Comment</button> 

        </div>
    </div>

</div>
    <?php
    endforeach
    ?>

<?php
require_once("templates/header.php");
?>