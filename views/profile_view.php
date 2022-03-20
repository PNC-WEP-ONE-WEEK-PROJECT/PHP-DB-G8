<?php
require_once("../models/post.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook 2.0</title>
    <!-- Your style here -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
      integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <style>
        .imgInPro{
            margin-left: 2rem;
            width: 90%;
        }
    </style>
</head>
<body>
    <nav class="nav_bar">
        <div class="logo">
            Facebook
        </div>
        <?php
        $page = "";
        if (isset($_GET['pages'])) {
          $page = $_GET['pages'];
        } else {
          $page = "home";
        }
    ?>
        <div class="menu">
            <a class="" aria-current="page" href="../home.php"><i class="fas fa-home fs-4  <?php if($page != 'home.php'){ echo 'active text-primary';}else{echo 'active text-muted';} ?>" id="home"></i></a>
            <a class="" href="../index.php?pages=news_view"><i  class="fas fa-globe-americas  fs-4 <?php if($page == 'news_view'){ echo 'active text-primary';}else{echo 'active text-muted';} ?>"  id="news"></i></a>
            <a  class="" href="../index.php?pages=friend_view"><i class="fas fa-users  fs-4 <?php if($page == 'friend_view'){ echo 'active text-primary';}else{echo 'active text-muted';} ?>" id="friends"></i></a>
            <a  class="" href="../index.php?pages=notification"><i class="fas fa-bell  fs-4 <?php if($page == 'notification'){ echo 'active text-primary';}else{echo 'active text-muted';} ?>" id="notifigetion"></i></a>
            
        </div>
        <div class="sideba_left">
            <a href="#" class="profile">
                <img src="../images/user_ph.png "class="img_pro" alt="">
            </a>
            <a href="../index.php">LOG OUT</a>
        </div>

    </nav>

<div class="contener_profile">
    <div class="profile_user">
        <img src="../images/Group 4.jpg" alt="">
        <div class="all_inforUser">
            <div class="nameOfuser">sarath orn</div>
            <div class="genderOfuser">M</div>
            <div class="birthOfuser">2022-09-87</div>

        </div>

    </div>
    <div class="cover_user">
        <img src="../images/3.jpg" alt="">

    </div>
</div>

<?php
$postImformation = getPosts();
foreach ($postImformation as $informationOfPost):
?>
<div class="showElementPost ">
    <div class="header_card">
        <div class="user_decri">
            <img src="../images/user_ph.png" alt="" class="pro_user" >
            <div class="infor">
                <div class="user_name">Sarath Orn</div>
                <div class="date">
                    <?php date_default_timezone_set('Asia/Phnom_Penh'); ?>
                    <?= $informationOfPost['date_post'] = date("D M j Y G:i:s a"); ?>
                </div>

            </div>
        </div>
        <div class="item_crud">
            <a href="../views/edit_viewprofile.php?id=<?php echo $informationOfPost['id_post']; ?>"><i class="fas fa-edit img_btnpost edit"></i></a>
            <a href="../controllers/delete_postprofile.php?id=<?php echo $informationOfPost['id_post']; ?>"><i class="fas fa-trash img_btnpost delete"> </i></a>
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
        <img src="../images/<?php  echo $informationOfPost['images'];?>" class="imgInPro" alt="">
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
require_once("../templates/footer.php");
?>