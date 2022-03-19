<!-- HEADER -----------------------------------------  -->
<?php


    // require_once('templates/header.php');

?>
<!-- MAIN -----------------------------------------  -->
<div class="main-content">
    <main>

        <?php

        // 0 - We set the  path by default to home
        $path = 'views/form_login.php';

        // 1 - Check if a page parameter is defined in the URL  
        if (isset($_GET['pages'])) {

            // 2 If yes : compute the PATH of the page  (example :  pages/students.php)
            $pageFile = 'views/'.$_GET['pages'].'.php';

            // 3 Check if the file exists, you can use file_exists() with the path computed above
            if (file_exists($pageFile)) {
                $path = $pageFile;
            }
        }

        // 4 Require the PATH of the page
        require_once($path);
        ?>
    </main>
</div>

    <?php
        $show = 'views/form_login.php';
        if (isset($_SESSION['login']) and !empty($_SESSION['login']))
        {
            $show = 'views/navbar.php';
        }
        require_once $show;
    
        $userPass= "123qwe";
        $password = $_POST['pswd'];
        // echo md5($password);
        // echo sha1($password);
        $test = password_hash($password,PASSWORD_DEFAULT);
    
        if(password_verify($pass, $test)) {
            require_once("home.php");
        } else {
            echo "Please log in again!!!
            Don't forget log in!!!";
        }
    ?>

<!-- FOOTER -----------------------------------------  -->
<?php
require_once('templates/footer.php');
?>