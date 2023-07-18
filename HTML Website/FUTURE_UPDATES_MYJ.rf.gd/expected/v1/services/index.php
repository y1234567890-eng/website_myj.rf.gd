<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>MYJ World - Services</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <link rel="icon" href="../Assets/logo_no_bg.png">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.0/css/all.css">
</head>

<body>
  <nav>
    <div id="inner-nav">
      <div id="logo">
        <a href="https://myj-worldv2.myousufjamil.repl.co/"><img src="../Assets/logo.png" width="90px" alt="logo"></a>
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
            if ($row['name'] == "Services") {
              echo "<a id='services' href='".$row{'link'}."' style='color: #a6f2ff;'>".$row['name']."</a>";
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
          if ($row['name'] == "Services") {
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
      <h1><span class="name">MYJ Services</span></h1>
      <h2>Easy, Quick & Fast Services</h2>
    </div>
  </div>

  <div class="space"></div>

  <button style="filter: invert();" class="margined"><a>All</a></button>
  <button class="margined"><a>Play Store</a></button>
  <button class="margined"><a>Scratch</a></button>
  <button class="margined"><a>YouTube</a></button>
  <!-- <button><a>Islamic Content (To be added with search option as filter)</a></button> -->

  <div class="search">
    <form>
      <input type="text" placeholder="Search for a service..." />
      <button type="submit"><i class="fas fa-search"></i></button>
    </form>
  </div>

  <div class="item">
    <div class="item-left">
      <img src="../Assets/logo.png" alt="Logo" />
      <h2>Lorem ipsum</h2>
      <p>Price: Free</p>
      <button><a>Try service <i class="fas fa-arrow-right"></i></a></button>
    </div>
    <div class="item-right">
      <h2>Lorem ipsum</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
        magna aliqua.</p>
    </div>
    <div class="item-mobile">
      <img src="../Assets/logo.png" alt="Logo" />
      <h2>Lorem ipsum</h2>
      <p>Price: Free</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
        magna aliqua.</p>
      <button><a>Try service <i class="fas fa-arrow-right"></i></a></button>
    </div>
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

  <script src="../script.js"></script>
</body>

</html>