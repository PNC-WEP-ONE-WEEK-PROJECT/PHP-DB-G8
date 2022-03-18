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
</head>
<body>
    <nav class="nav_bar">
        <div class="logo">
            Facebook
        </div>
        <?php
        $page = "";
        if (isset($_GET['page'])) {
          $page = $_GET['page'];
        } else {
          $page = "home";
        }
    ?>
        <div class="menu">
            <a class="" aria-current="page" href="?page=home"><i class="fas fa-home fs-4  <?php if($page == 'home'){ echo 'active text-primary';}else{echo 'active text-muted';} ?>" id="home"></i></a>
            <a class="" href="?page=about"><i  class="fas fa-globe-americas  fs-4 <?php if($page == 'about'){ echo 'active text-primary';}else{echo 'active text-muted';} ?>"  id="news"></i></a>
            <a  class="" href="?page=friend"><i class="fas fa-users  fs-4 <?php if($page == 'friend'){ echo 'active text-primary';}else{echo 'active text-muted';} ?>" id="friends"></i></a>
            <a  class="" href="?page=notification"><i class="fas fa-bell  fs-4 <?php if($page == 'notification'){ echo 'active text-primary';}else{echo 'active text-muted';} ?>" id="notifigetion"></i></a>
            
        </div>
        <div class="sideba_left">
            <i class="fab fa-facebook-messenger  fs-4"></i>
            <a href="index.php">LOG OUT</a>
        </div>

    </nav>

