<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- home  -->
    <div class="contener1">
        <div class="text">
            <h1 class="nameOfapp">
                Facebook
            </h1>
            <h4 class="inforDetail">
                 Facebook create by students Group8 in PNC will helps you connect and share with the people in your life.
            </h4>
            <img src="images/bg.png" alt="" class="bg_first">
        </div>
      

        <form class="formLoginIn" action="../index.php" method="post">


            <div>
                <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
            </div>
            <div>
                
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
            </div>

            <button type="submit" class="btn-primary form-control">Login in</button>
            <p class="para">
                <a href="" class="forgot_pass">forgot password</a>
            </p>
            <p class="para">
            <a href="../views/create_acc.php" class="createAcc">Create new account</a>

            </p>
        </form>
    </div>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $userName = "Sarath";
            $userPass = "123qwe";

            $name = $_POST['username'];
            $password = $_POST['pswd'];

            if (!empty($name) and !empty($password) and $name == $userName) {
                $test = password_hash($password,PASSWORD_DEFAULT);
    
                if(password_verify($userPass, $test)) {
                    $_SESSION['login'] = $name;
                    header('Location: home.php');
                }
                
            } 
            else {
                echo '<script>alert("Please login again because your name and password are not valid")</script>';
                
            }
        }
    ?>

</body>
</html>