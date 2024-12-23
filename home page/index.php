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
  <h2>Game<span>Hub</span></h2>
  <h5 id="welcome" style="color: white; font-size: 20px; ">Welcome <?php echo $user_data['user_name']; ?></h5>
  <ul class="nav">
    <li><a href="../Search Page/index.php">Explore</a></li>
    <li><a href="../Authentication_System/logout.php">Logout</a></li>
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
        <img src="images/wp5399083.webp" alt="">
        <div class="banner">
          <div class="left">
            <div class="features">
              <div class="rating">
                <span class="score">8.9</span>
                <div class="content">
                  <span class="subtitle">Top review</span>
                  <h4>Exquisite</h4>
                  <span>A mix of action, exploration, and puzzles.</span>
                </div>
              </div>
            </div>
            <h1>God of war:kratos</h1>
          </div>
          <div class="right">
            <ul class="description">
              <li>
                <h4><i class="fa-regular fa-circle-check"></i> Awards
                </h4>
                <p>Game of the Year (The Game Awards 2018). 
                </p>

              </li>
              <li>
                <h4><i class="fa-regular fa-circle-check"></i> Series Legacy
                </h4>
                <p>With over 51 million copies sold globally, the series is one of PlayStation's flagship franchises. 
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
        <img src="images/iYZoMIa5jb8Vwkt53JjH6J1anbe9r9ZyCYweqIscuXA.webp" alt="">
        <div class="banner">
          <div class="left">
            <div class="features">
              <div class="rating">
                <span class="score">8.3</span>
                <div class="content">
                  <span class="subtitle">top review</span>
                  <h4>Epic</h4>
                  <span>Awarded the game a 9/10, praising its "absolutely gorgeous open-world" and "incredible combat."</span>
                </div>
              </div>
            </div>
            <h1>Ghost of tsushima</h1>
          </div>
          <div class="right">
            <ul class="description">
              <li>
                <h4><i class="fa-regular fa-circle-check"></i> Awards
                </h4>
                <p>Winner: Best Art Direction. 
                </p>

              </li>
              <li>
                <h4><i class="fa-regular fa-circle-check"></i> Sales and Impact
                </h4>
                <p>As of March 2021, "Ghost of Tsushima" sold over 6.5 million copies worldwide, demonstrating its commercial success and popularity among players. 
                </p>
              </li>
            </ul>
            <div class="trailer">
              <h2>Watch Trailer</h2>
              <iframe width="853" height="480" src="https://www.youtube.com/embed/Zbq7BnsQhrw" title="Ghost of Tsushima -The Ghost | PS4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>            </div>
          </div>
        </div>
      </div>
      
      <div class="swiper-slide">
        <img src="images/modern-warfare-3-2023-4k-wallpapers-v0-u72ww7up0q1c1.webp" alt="">
        <div class="banner">
          <div class="left">
            <div class="features">
              <div class="rating">
                <span class="score">8.5</span>
                <div class="content">
                  <span class="subtitle">top review</span>
                  <h4>Awesome</h4>
                  <span>Advanced graphics and immersive audio.</span>
                </div>
              </div>
            </div>
            <h1>modern warfare</h1>
          </div>
          <div class="right">
            <ul class="description">
              <li>
                <h4><i class="fa-regular fa-circle-check"></i> Awards
                </h4>
                <p>Nominated for Best Multiplayer.
                </p>

              </li>
              <li>
                <h4><i class="fa-regular fa-circle-check"></i> Sales and Popularity
                </h4>
                <p>Among the top-selling games of 2023 during its release month. 
                </p>
              </li>
            </ul>
            <div class="trailer">
              <h2>Watch Trailer</h2>
<iframe width="853" height="480" src="https://www.youtube.com/embed/i3IsLrPeZG8" title="Call of Duty: Modern Warfare III - Gameplay Reveal Trailer | PS5 &amp; PS4 Games" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <img src="images/minee.jpeg" alt="">
        <div class="banner">
          <div class="left">
            <div class="features">
              <div class="rating">
                <span class="score">9.5</span>
                <div class="content">
                  <span class="subtitle">top review</span>
                  <h4>Limitless</h4>
                  <span>Rated highly for its creativity, freedom, and community-driven content.</span>
                </div>
              </div>
            </div>
            <h1>Minecraft</h1>
          </div>
          <div class="right">
            <ul class="description">
              <li>
                <h4><i class="fa-regular fa-circle-check"></i> Awards
                </h4>
                <p>2011 Game Developers Choice Awards: Innovation Award 
                </p>

              </li>
              <li>
                <h4><i class="fa-regular fa-circle-check"></i> Sales and Popularity
                </h4>
                <p>Over 300 million copies sold as of 2023, making it the best-selling video game of all time.
                </p>
              </li>
            </ul>
            <div class="trailer">
              <h2>Watch Trailer</h2>
              <iframe width="853" height="480" src="https://www.youtube.com/embed/vdrn4ouZRvQ" title="Minecraft Caves &amp; Cliffs Update: Part II - Official Trailer" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>


      <div class="swiper-slide">
        <img src="images/marvels-spider-man-2-2023-games-playstation-5-marvel-3840x2160-6510.jpg" alt="">
        <div class="banner">
          <div class="left">
            <div class="features">
              <div class="rating">
                <span class="score">8.1</span>
                <div class="content">
                  <span class="subtitle">top review</span>
                  <h4>Amazing</h4>
                  <span>Rated 10/10, calling it a “masterpiece” and praising the seamless web-swinging and character development.</span>
                </div>
              </div>
            </div>
            <h1>Spider-man 2</h1>
          </div>
          <div class="right">
            <ul class="description">
              <li>
                <h4><i class="fa-regular fa-circle-check"></i> Awards
                </h4>
                <p>Won Best PlayStation Game and Best Storytelling. 
                </p>

              </li>
              <li>
                <h4><i class="fa-regular fa-circle-check"></i> User Score
                </h4>
                <p>On Metacritic, the game holds an impressive user score of 9.3/10, reflecting widespread player satisfaction. 
                </p>
              </li>
            </ul>
            <div class="trailer">
              <h2>Watch Trailer</h2>
              <iframe width="853" height="480" src="https://www.youtube.com/embed/nq1M_Wc4FIc" title="Marvel&#39;s Spider-Man 2 - Be Greater. Together. Trailer I PS5 Games" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>            </div>
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