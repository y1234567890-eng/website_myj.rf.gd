<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>MYJ World - The Homepage Of MYJ</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <link rel="icon" href="Assets/logo_no_bg.png">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.0/css/all.css">
  <meta name="google-site-verification" content="J91IjLyufmgCuYE1h_ZmA-nwqf67FA8uZpKAeKpVVaQ" />
</head>

<body>
  <nav>
    <div id="inner-nav">
      <div id="logo">
        <a href="https://myj.rf.gd/expected/v1"><img src="Assets/logo.png" width="90px" alt="logo"></a>
      </div>
      <div id="nav-btns">
        <?php
          $host="sql112.epizy.com";
          $dbuser="epiz_30389702";
          $dbpassword="VjgiAEJdCn4";
          $dbname="epiz_30389702_database";
          $conn = new mysqli($host, $dbuser, $dbpassword, $dbname);
          if($conn) {
              echo "<script>console.log('Success');</script>";
          }
          else {
              echo "<script>console.log('Not Connected!');</script>";
          }

          $query = $conn->query("SELECT * FROM `navbar`");
          while ($row=$query->fetch_array(MYSQLI_ASSOC)) {
            if ($row['name'] == "Home") {
              echo "<a id='home' href='".$row{'link'}."' style='color: #a6f2ff;'>".$row['name']."</a>";
            } else {
              echo "<a href='".$row{'link'}."'>".$row['name']."</a>";
            }
          }
          ?>
      </div>
      <i id="mob-sidebar-btn" class='fa fa-bars'></i>
    </div>
  </nav>

  <div id="sidebar">
    <i id="close-icon" class="fa fa-times"></i>
    <div id="inner-sidebar" style="margin-top: calc((100vh - 180px) / 2);">
      <?php 
        $query = $conn->query("SELECT * FROM `navbar`");
        while ($row=$query->fetch_array(MYSQLI_ASSOC)) {
          if ($row['name'] == "Home") {
            echo "<button><a id='home' href='".$row{'link'}."' style='color: #a6f2ff;'>".$row['name']."</a></button>";
          } else {
            echo "<button><a href='".$row{'link'}."'>".$row['name']."</a></button>";
          }
        }
      ?>
    </div>
  </div>

  <div id="header">
    <div id="inner-header">
      <h1><span class="name">MYJ World</span></h1>
      <h2>Working for your betterment</h2><br>
      <span style="height: 5px;"></span><br>
      <a href="services/"><button>Let's start <i class="fa fa-arrow-right"></i></button></a>
    </div>
  </div>

  <div id="intro" class="section-1">
    <h2>A General Introduction</h2>
    <div class="line"></div>
    <div class="inner-section">
      <div class="text">
        <h3>Who are we?</h3>
        <p><span class="name">MYJ World</span> provides modern services, for anyone needing it at any location. <span
            class="name">MYJ World</span> provides many services including calculators, counters, browsers, smart
          assistants, binary converters and much more, all on the web, and also available for download for easy offline
          access from your home screen. At <span class="name">MYJ World</span>, we believe that technology and design
          should seamlessly coexist, and that your tasks should be simplified by providing multiple services at one page
          to ensure your day is managed as smoothly as possible.</p>
      </div>
      <div class="image">
        <img src="Assets/intro-img.png" alt="Introduction" />
      </div>
    </div>
  </div>

  <div id="why-chose-us" class="section-2" style="height: auto;">
    <h2>Why Choose Us?</h2>
    <div class="line"></div>
    <div id="general-intro" class="inner-section center-elements">
      <div id="gen-intro-1" class="inner-gen-intro">
        <i class="fas fa-globe" style="font-size: 40px;"></i>
        <h3>Modern</h3>
        <p>Modern services that fit your needs</p>
      </div>
      <div id="gen-intro-2" class="inner-gen-intro">
        <i class="fas fa-hand-pointer" style="font-size: 40px;"></i>
        <h3>Top Service</h3>
        <p>Find all sorts of services here</p>
      </div>
      <div id="gen-intro-3" class="inner-gen-intro">
        <i class="fas fa-border-all" style="font-size: 40px;"></i>
        <h3>Best Apps for Android</h3>
        <p>Get our Modern Android App Services for free</p>
      </div>
    </div>
  </div>

  <div id="featured-1" class="section-1">
    <div class="inner-section center-elements">
      <div class="text center-elements">
        <h3>Ultricies integer</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua.</p>
        <a href="#"><button>Try Service <i class="fas fa-arrow-right"></i></button></a>
      </div>
      <div class="image center-elements">
        <img src="Assets/featured-1.png" alt="Featured" />
      </div>
    </div>
  </div>

  <div id="featured-2" class="section-2">
    <div class="inner-section">
      <div class="image center-elements">
        <img src="Assets/featured-2.png" alt="Featured" />
      </div>
      <div class=" text center-elements">
        <h3>Ultricies integer</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua.</p>
        <a href="#"><button>Try Service <i class="fas fa-arrow-right"></i></button></a>
      </div>
    </div>
  </div>

  <div id="feedback" class="section-1">
    <h2>What people say about us?</h2>
    <div class="line"></div>
    <div id="inner-feedback" class="inner-section center-elements">
      <?php 
        $currenttheme = "pink";
        $query = $conn->query("SELECT * FROM `feedback` ORDER BY id DESC LIMIT 4");
        while ($row=$query->fetch_array(MYSQLI_ASSOC)) {
          echo "<div class='cards ".$currenttheme."-theme'>";
          echo "<i class='fa fa-quote-left fa-border'></i>";
          echo "<h4>".$row['name']."</h4>";
          echo "<p>".$row['message']."</p>";
          echo "</div>";
          if ($currenttheme == "pink") {
            $currenttheme = "green";
          } else if ($currenttheme == "green") {
            $currenttheme = "blue";
          } else if ($currenttheme == "blue") {
            $currenttheme = "yellow";
          } else {
            $currenttheme = "pink";
          }
        }
      ?>
    </div>
    <br>
    <a href="#"><button><i class="fa fa-chevron-right"></i> See all</button></a>
  </div>

  <div id="updates" class="section-2">
    <h2>Our Latest Updates</h2>
    <div class="line"></div>
    <div id="inner-updates" class="inner-section center-elements">
    <?php 
        $host="sql112.epizy.com";
        $dbuser="epiz_30389702";
        $dbpassword="VjgiAEJdCn4";
        $dbname="epiz_30389702_admin";
        $conn = new mysqli($host, $dbuser, $dbpassword, $dbname);
        if($conn) {
          echo "<script>console.log('Success');</script>";
        }
        else {
          echo "<script>console.log('Not Connected!');</script>";
        }

        $currenttheme = "pink";
        $query = $conn->query("SELECT * FROM `updates` ORDER BY id DESC LIMIT 4");
        while ($row=$query->fetch_array(MYSQLI_ASSOC)) {
          echo "<div class='cards ".$currenttheme."-theme'>";
          echo "<i class='fa fa-quote-left fa-border'></i>";
          echo "<h4>".$row['title']."</h4>";
          echo "<p>".$row['details']."</p>";
          echo "<p>".$row['date']."</p>";
          echo "</div>";
          if ($currenttheme == "pink") {
            $currenttheme = "green";
          } else if ($currenttheme == "green") {
            $currenttheme = "blue";
          } else if ($currenttheme == "blue") {
            $currenttheme = "yellow";
          } else {
            $currenttheme = "pink";
          }
        }
      ?>
    </div>
    <br>
    <a href="#"><button><i class="fa fa-chevron-right"></i> See all</button></a>
  </div>

  <div id="footer" class="footer">
    <div id="footer-flex" class="center-elements">
      <div id="footer-name-slogan">
        <h3><span class="name">MYJ World</span></h3>
        <h5>Working for your betterment</h5>
      </div>

      <?php 
      $host="sql112.epizy.com";
      $dbuser="epiz_30389702";
      $dbpassword="VjgiAEJdCn4";
      $dbname="epiz_30389702_database";
      $conn = new mysqli($host, $dbuser, $dbpassword, $dbname);
      if($conn) {
        echo "<script>console.log('Success');</script>";
      }
      else {
        echo "<script>console.log('Not Connected!');</script>";
      }

        $query = $conn->query("SELECT * FROM `footer`");
        while ($row=$query->fetch_array(MYSQLI_ASSOC)) {
          echo "<div>";
          echo "<p><b>".$row['name']."</b></p>";
          echo $row['subitems'];
          echo "</div>";
        }
      ?>
    </div>
    <div id="policy">
      <a href="#">Terms of use</a> <br><br>
      <a href="#">Privacy Policy</a>
    </div>
  </div>

  <div class="popup">
    <p>By using our website, you agree to our <a href="#"> Terms of Use</a> &amp; <a href="#">Privacy Policy</a></p>
    <button class="popup-btn">Accept & Continue</button>
  </div>

  <div id="copyright" class="floating-box" style="height: 40px;">
    <p style="font-size: 15px;">&copy;
      <script>document.write(new Date().getFullYear());</script> MYJ World
    </p>
  </div>

  <script src="script.js"></script>
</body>

</html>