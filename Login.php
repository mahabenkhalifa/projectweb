<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap');
    </style>
    <link rel="stylesheet" href="regist.css">
    <title>login in Makeup Corner</title>
</head>
<body>
     <div class="container">
        <div class="box from-box">
           <header>Login</header>
           <form action="" method="post">
             <div class="field input">
                <label for="username">Username</label>
                <br>
                <input type="text" name="username" id="username" required>

             </div>
             

             <div class="field input">
                <label for="password">Password</label>
                <br>
                <input type="password" name="password" id="password" required>

             </div>

             <div class="field">
                <input type="submit" class="btn" name="submit" value="login" required>
             </div>
             <div class="links">Don't have an account? <a href="Sign up.php">Sign up</a>
             </div>


           </form>
        </div>
     </div>
    
</body>
</html>