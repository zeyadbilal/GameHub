<?php
    // to start the session and check if the user is logged in
    // check if the user is logged in
    
    session_start();
    include("../Authentication_System/connectionDB.php");
    include("../Authentication_System/functions.php");
    $user_data = check_login($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link
    rel="stylesheet"
     href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/all.css">
</head>

<body>
<header>
  <h2>Game <span>Hub</span></h2>
  <h5 id="welcome" style="color: white; font-size: 20px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Welcome <?php echo $user_data['user_name']; ?></h5>
  <ul class="nav">
    <li><a href="../Search Page/index.php">Explore</a></li>
    <li><a href="../Authentication_System/logout.php">Logout</a></li>
    <li><a href="">Top Rated</a></li>
    <li><a href="">Favorites</a></li>
  </ul>
  <div>
    <a href="../12.2 contact us section/index2.php" class="contact">Contact Us</a></li>
  </div>

</header>


    <!-- Slider main container -->
<div class="swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->
      <div class="swiper-slide">
        <img src="images/d4o2f27-f75ee1cd-e619-4bc7-94c1-f41876f29533.jpg" alt="">
        <div class="banner">
          <div class="left">
            <div class="features">
              <div class="rating">
                <span class="score">8.9</span>
                <div class="content">
                  <span class="subtitle">lorem insjs jajss</span>
                  <h4>Awesome</h4>
                  <span>lorem wss a s asa</span>
                </div>
              </div>
            </div>
            <h1>Welcome <?php echo $user_data['user_name']; ?></h1>
          </div>
          <div class="right">
            <ul class="description">
              <li>
                <h4><i class="fa-regular fa-circle-check"></i> lorem ipsum
                </h4>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                </p>

              </li>
              <li>
                <h4><i class="fa-regular fa-circle-check"></i> lorem ipsum
                </h4>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                </p>
              </li>
            </ul>
            <div class="trailer">
              <h2>Watch Trailer</h2>
              <iframe width="853" height="480" src="https://www.youtube.com/embed/K0u_kAWLJOA" title="God of War – Story Trailer | PS4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>            </div>
          </div>
        </div>
      </div>



      <div class="swiper-slide">
        <img src="images/ghost-of-tsushima2-3840x2160-12072.jpg" alt="">
        <div class="banner">
          <div class="left">
            <div class="features">
              <div class="rating">
                <span class="score">8.9</span>
                <div class="content">
                  <span class="subtitle">lorem insjs jajss</span>
                  <h4>Awesome</h4>
                  <span>lorem wss a s asa</span>
                </div>
              </div>
            </div>
            <h1><span>Welcome</span> name .</h1>
          </div>
          <div class="right">
            <ul class="description">
              <li>
                <h4><i class="fa-regular fa-circle-check"></i> lorem ipsum
                </h4>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                </p>

              </li>
              <li>
                <h4><i class="fa-regular fa-circle-check"></i> lorem ipsum
                </h4>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                </p>
              </li>
            </ul>
            <div class="trailer">
              <h2>Watch Trailer</h2>
              <iframe width="853" height="480" src="https://www.youtube.com/embed/Leb8_DXD7qM" title="GHOST OF TSUSHIMA Gameplay Walkthrough FULL GAME [4K 60FPS PC ULTRA] - No Commentary" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <img src="images/call-of-duty-modern--13480.jpg" alt="">
        <div class="banner">
          <div class="left">
            <div class="features">
              <div class="rating">
                <span class="score">8.9</span>
                <div class="content">
                  <span class="subtitle">lorem insjs jajss</span>
                  <h4>Awesome</h4>
                  <span>lorem wss a s asa</span>
                </div>
              </div>
            </div>
            <h1><span>Welcome</span> name .</h1>
          </div>
          <div class="right">
            <ul class="description">
              <li>
                <h4><i class="fa-regular fa-circle-check"></i> lorem ipsum
                </h4>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                </p>

              </li>
              <li>
                <h4><i class="fa-regular fa-circle-check"></i> lorem ipsum
                </h4>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                </p>
              </li>
            </ul>
            <div class="trailer">
              <h2>Watch Trailer</h2>
<iframe width="853" height="480" src="https://www.youtube.com/embed/i3IsLrPeZG8" title="Call of Duty: Modern Warfare III - Gameplay Reveal Trailer | PS5 &amp; PS4 Games" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>
  
    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  
    <!-- If we need scrollbar -->
    <div class="swiper-scrollbar"></div>
  </div>
<!-- ///////////////////////////////////////////////////////// -->
 



















    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="./script.js"></script>
</body>
</html>