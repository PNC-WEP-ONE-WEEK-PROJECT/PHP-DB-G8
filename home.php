
<?php
/**
 * Your code here
 */
require_once("templates/header.php");
?>
<!-- go to input post -->
<div class="coverElementPost">
    <div class="user_decri">
        <img src="images/user_ph.png" alt="" class="pro_user" >
        <input type="text" class="input"  placeholder="What are you thinking about..............">
    </div>
    <div class="line"></div>
   
    <div class="button_post">
        <a href="views/post_view.php"><i class="fas fa-file-image img_btnpost"></i> Photo/Video</a> 
    </div>
  
</div>

<!-- form display post -->
<div class="showElementPost">
    <div class="header_card">
        <div class="user_decri">
            <img src="images/user_ph.png" alt="" class="pro_user" >
            <div class="infor">
                <div class="user_name">Sarath Orn</div>
                <div class="date">
                    July 17 at 1.23pm
                </div>

            </div>
        </div>
        <div class="item_crud">
            <i class="fas fa-edit img_btnpost edit"></i>
            <i class="fas fa-trash img_btnpost delete"></i>
        </div>
        
    </div>
    <div class="infor_user">
        Hello we are group 8. We really happy for the project to create the Facebook app.
    </div>
    <div class="cover_photo">
        <img src="images/3.jpg" class="photo_post" alt="">
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
require_once("templates/header.php");
?>