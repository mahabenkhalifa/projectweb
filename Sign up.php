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
    <title>Sign Up in Makeup Corner</title>
</head>
<body>
     <div class="container">
        <div class="box from-box">


        <?php 
          include("php/config.php");
          if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $email = $_POST['email'];
            $age = $_POST['age'];
            $password = $_POST['password'];


            //VERIFY THE MAIL
            $verify_query = mysqli_query($con,"SELECT Email FROM users WHERE Email='$email'");
            if(mysqli_num_rows($verify_query) !=0 ){
               echo "<div class='message'>
                          <p>This email is used, Try another one please!</p>
                     </div> <br>";
               echo "<a href='javascript:self.histroy.back()'><button class='btn'>Go back</button>"
               "

            }
            else{
               mysqli_query($con, "INSERT INTO users(username, Email, Age, Password) Values('$username','$email','$age','$password',)") or die()
            }
          }
        
        
         ?>










           <header>Sign Up</header>
           <form action="" method="post">
             <div class="field input">
                <label for="username">Username</label>
                <br>
                <input type="text" name="username" autocomplete="off"  id="username" required>
             </div>

             <div class="field input">
                <label for="email">Email</label>
                <br>
                <input type="text" name="email" id="email" autocomplete="off" required>
             </div>
             

             <div class="field input">
                <label for="age">Age</label>
                <br>
                <input type="number" name="age" id="age" autocomplete="off" required>
             </div>
            
             <div class="field input">
                <label for="password">Password</label>
                <br>
                <input type="password" name="password" autocomplete="off" id="password" required>

             </div>
            
             <div class="field">
                <input type="submit" class="btn" name="submit" value="register" required>
             </div>
             <div class="links">Already Signed Up? <a href="Login.php">Login</a>
             </div>


           </form>
        </div>
     </div>
    
</body>
</html>