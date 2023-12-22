<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="CSS/home.css">
<link rel="stylesheet" href="CSS/typing.css">
<link rel="stylesheet" href="CSS/chatbot.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

<title>Yearn Art | Home</title>
<link rel="icon" href="Yearn.jpg" type="image/png">

</head>
<body>
  <nav class="navbar">
    <div class="logo">
      <img src="Yearn.jpg" alt="Logo">
      <a href="home.html">Yearn Art</a>
    </div>
    <div class="menu">
      <div class="menu-links">
        <a href="Products.html" class="Products">Products</a>
        <a href="#" class="Orders">My Orders</a>
        <a href="About.html" class="About">About Us</a>
        <a href="FAQ.html" class="FAQ">FAQ</a>
        <a href="Login.html" class="Login">Login</a>
        <a href="Signup.html" class="Signup">Signup</a>
      </div>
    </div>
    <div class="menu-btn">
      <i class="fa-solid fa-bars"></i>
    </div>
  </nav>

  <div class="container">
    <div class="pic">
      <div class="picture">
        <img src="Yearn.jpg" alt="Yearn Art">
      </div>
    </div>
    <div class="main-container">
      <section id="tranding">
          <div class="container1">
          <div class="swiper tranding-slider">
              <div class="swiper-wrapper">
              <!-- Slide-start -->
              <div class="swiper-slide tranding-slide">
                  <div class="tranding-slide-img">
                  <img src="baby.jpg" alt="Tranding">
                  </div>
              </div>
              <!-- Slide-end -->
              <!-- Slide-start -->
              <div class="swiper-slide tranding-slide">
                  <div class="tranding-slide-img">
                  <img src="totebag2.jpg" alt="Tranding">
                  </div>
              </div>
              <!-- Slide-end -->
              <!-- Slide-start -->
              <div class="swiper-slide tranding-slide">
                  <div class="tranding-slide-img">
                  <img src="beachwear.jpg" alt="Tranding">
                  </div>
              </div>
              <!-- Slide-end -->
              </div>
          </div>
        
          </div>
      </section>
    </div>
  </div>  

<script src="./home.js"></script>

<div class="chatbot">
    <div class="chatbox">
        <div class="chatbox__support">
            <div class="chatbox__header">
                <div class="chatbox__content--header">
                    <h4 class="chatbox__heading--header">YearnBot</h4>
                </div>
            </div>
            <div class="chatbox__messages">
                <div>
                    <div class="messages__item messages__item--visitor">
                        Can you let me talk to the support?
                    </div>
                    <div class="messages__item messages__item--operator">
                        Sure!
                    </div>
                    <div class="messages__item messages__item--visitor">
                        Need your help, I need a developer in my site.
                    </div>
                    <div class="messages__item messages__item--operator">
                        Hi... What is it? I'm a front-end developer, yay!
                    </div>
                    <div class="messages__item messages__item--typing">
                        <span class="messages__dot"></span>
                        <span class="messages__dot"></span>
                        <span class="messages__dot"></span>
                    </div>
                </div>
            </div>
            <div class="chatbox__footer">
                <div class="file">
                    <img src="file.png" alt="file">
                </div>
                <input type="text" placeholder="Write a message...">
                <div class="icon">
                    <img src="./send.png" alt="Send">
                </div>
            </div>
        </div>
        <div class="chatbox__button">
            <button>button</button>
        </div>
    </div>
</div>
<script src="./Chat.js"></script>
<script src="./app.js"></script>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="script.js"></script>


  <script>
    const menuLinks = document.querySelectorAll('.menu-link');
    
    menuLinks.forEach(link => {
      link.addEventListener('click', () => {
        menuLinks.forEach(otherLink => otherLink.classList.remove('active-link'));
        link.classList.add('active-link');
      });
    });
  </script>
</body>
</html>

