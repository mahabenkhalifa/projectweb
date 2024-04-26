<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Makeup Corner</title>
    <link rel="stylesheet" href="styles.Css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
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
                    <a href="/Home.php" class="navbar__links">Home</a>
                </li>
                <li class="navbar__item">
                    <a href="/tech.php" class="navbar__links">Tech</a>
                </li>
                <li class="navbar__item">
                    <a href="/products.php" class="navbar__links">Products</a>
                </li>
                <li class="navbar__btn">
                    <a href="/SignUp.php" class="button">Sign up</a>
                </li>
            </ul>
        </div>
    </nav>

    <!---hero section-->
    <div class="main">
        <div class="main__container">
            <div class="main__content">
              <h1> Welcome To Our Beauty Zone</h1> 
              <h2>Girly Corner </h2> 
              <p>The best products with the best prices.</p>
              <button class="main__btn"><a href="/">Get started</a></button>
            </div>
            <div class="main__img--container"> 
                <img src="images/pic1.svg.svg" alt="pic" id="main__img">
            </div>
        </div>
    </div>

    <!--Services section-->
    <div class="services">
        <h1>Discover Our Products</h1>
        <div class="services__container">
            <div class="services__card">
                <h2>Makeup Products</h2>
                <button>See more</button>
            </div>
            <div class="services__card">
                <h2>Hair Products</h2>
                <button>See more</button>
            </div>
            <div class="services__card">
                <h2>Accesories</h2>
                <button>See more</button>
            </div>
        </div>
    </div>
    

    <!--Footer Section-->
    <div class="footer__container">
        <div class="footer__links">
            <div class="footer__link--wrapper">
                <div class="footer__link--items">
                    <h2>Social Media</h2>
                    <a href="/">Instagram</a>
                    <a href="/">Facbook</a>
                </div>
            </div>
        </div>
        <div class="social__media">
            <div class="social__media--wrap">
                <div class="footer__logo">
                    <a href="/" id="footer__logo"><i class="fas fa-gem"></i>NEXT</a>
                </div>
                <div class="social__icons">
                    <a href="/" class="social__icon--link" target="_blank">
                     <i class="fab fa-facebook"></i>   
                    </a>
                    <a href="/" class="social__icon--link" target="_blank">
                        <i class="fab fa-instagram"></i>   
                       </a>
                </div>
            </div>
        </div>
    </div>
    <script src="app.js"></script>
</body>
</html>