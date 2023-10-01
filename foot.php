<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="image" href="logo1.png" type="image/png">
    <title>M.R</title>
</head>
<body>

    <header>
        <img class="logo" src="logo1.png" alt="logo" width="50px" height="50px">
        <a href="#" class="logo">matchReserve</a>
        <nav class="navigation">
            <a href="#services">sports</a>
            <a href="#projects">reserve</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>


    <section class="main">
        <div>
            <h2>Hello, we are matchReserve<br><span>reservation des matchs</span></h2>
            <h3 color="green">make reservation matchs easy</h3>
            <a href="#projects" class="main-btn">reserve now</a>
            <div class="social-icons">
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </section>

    <section class="cards" id="services">
        <h2 class="title">sports</h2>
        <div class="content">
            <div class="card">
                <div class="icon">
                    <img src="football.png" alt="football" width="100px" height="100px">
                </div>
                <div class="info">
                    <h3>soccer</h3>
                    <p>Soccer is more than just a game; it's a symphony of passion, skill, and teamwork that unites people from all walks of life, creating an enchanting melody that echoes across the world's stadiums and hearts</p>
                </div>
            </div>
            <div class="card">
                <div class="icon">
                    <img src="ball-of-basketball.png"  width="100px" height="100px">
                 </div>
                <div class="info">
                    <h3>basketball</h3>
                    <p>Basketball is an artful dance of grace and power, where the hardwood stage becomes a canvas for players to paint their dreams with soaring dunks, precision passes, and unyielding determination, inspiring generations to reach for the stars with every dribble</p>
                </div>
            </div>
            <div class="card">
                <div class="icon">
                  <img src="volleyball-ball.png" alt="volley-ball" width="100px" height="100px">
                </div>
                <div class="info">
                    <h3>volley-ball</h3>
                      <p>soon</p>
                </div>
            </div>
        </div>
    </section>
      <br/>
      <?php 
       
      ?>
    <section class="projects" id="projects">
        <div class="content">
            <div class="wrapper">
                <div class="card-switch">
                    <label class="switch">
                       <input type="checkbox" class="toggle">
                       <span class="slider"></span>
                       <span class="card-side"></span>
                       <div class="flip-card__inner">
                          <div class="flip-card__front">
                             <div class="title">Log in</div>
                             <form class="flip-card__form" action="">
                                <input class="flip-card__input" name="email" placeholder="Email" type="email">
                                <input class="flip-card__input" name="password" placeholder="Password" type="password">
                                <button class="flip-card__btn">Let`s go!</button>
                             </form>
                          </div>
                          <div class="flip-card__back">
                             <div class="title">Sign up</div>
                             <form class="flip-card__form" action="">
                                <input class="flip-card__input" placeholder="Name" type="name">
                                <input class="flip-card__input" name="email" placeholder="Email" type="email">
                                <input class="flip-card__input" name="password" placeholder="Password" type="password">
                                <button class="flip-card__btn">Confirm!</button>
                             </form>
                          </div>
                       </div>
                    </label>
                </div>   
           </div>
        </div>
    </section>

    <section class="cards contact" id="contact">
        <br/><h2 class="title">Let's work together</h2>
        <div class="content">
            <div class="card">
                <div class="icon">
                    <i class="fas fa-phone"></i>
                </div>
                <div class="info">
                    <h3>Phone</h3>
                    <p>+212612345678</p>
                </div>
            </div>
            <div class="card">
                <div class="icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="info">
                    <h3>Email</h3>
                    <p>adam@gmail.com</p>
                </div>
            </div>
        </div>
    </section>
    
    <footer class="footer">
        <p class="footer-title">Copyrights @ <span>Imloul adam</span></p>
        <div class="social-icons">
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
        <div class="stars">
             <input type="radio" name="1" id="">
             
        </div>
    </footer>

</body>
</html>