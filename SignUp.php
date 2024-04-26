<?php 
    include './php/connect_db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap');
    </style>
    <link rel="stylesheet" href="./css/signup.css">
    <link rel="stylesheet" href="./styles.css">
    <link rel="stylesheet" href="regist.css">
    <title>Sign Up in Makeup Corner</title>
</head>
<body>

 <!--Navbar section-->
 <nav class="navbar">
        <div class="navbar__container">
            <a src="images/makeup.png" id="navbar__logo">Makeup Corner</a>
            <div class="navbar__toggle" id="mobile-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <ul class="navbar__menu">
                <li class="navbar__item">
                    <a href="/mahatou" class="navbar__links">Home</a>
                </li>
                <li class="navbar__item">
                    <a href="/mahatou/tech.php" class="navbar__links">Tech</a>
                </li>
                <li class="navbar__item">
                    <a href="/mahatou/products.php" class="navbar__links">Products</a>
                </li>
                <li class="navbar__btn">
                    <a href="/mahatou/SignUp.php" class="button">Sign up</a>
                </li>
            </ul>
        </div>
    </nav>



    <div class="container">
        <div class="box from-box">


        <header>Sign Up</header>
        <form action="" method="post">
            <div class="field input">
                <label for="username">Username</label><br>
                <input type="text" name="username" autocomplete="off" id="username" required>
            </div>

            <div class="field input">
                <label for="email">Email</label><br>
                <input type="text" name="email" id="email" autocomplete="off" required>
            </div>

            <div class="field input">
                <label for="age">Age</label><br>
                <input type="number" name="age" id="age" autocomplete="off" required>
            </div>
            
            <div class="field input">
                <label for="password">Password</label><br>
                <input type="password" name="password" autocomplete="off" id="password" required>
            </div>
            
            <div class="field">
                <input type="submit" class="btn" name="submit" value="register">
            </div>
            <div class="links">Already Signed Up? <a href="Login.php">Login</a></div>
        </form>
    </div>
</div>
</body>
</html>
