<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>MYJ World - Updates</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <link rel="icon" href="../../Assets/logo_no_bg.png">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.0/css/all.css">
  <meta name="google-site-verification" content="J91IjLyufmgCuYE1h_ZmA-nwqf67FA8uZpKAeKpVVaQ" />
</head>

<body>
  <nav>
    <div id="inner-nav">
      <div id="logo">
        <a href="https://myj.rf.gd/expected/v1/"><img src="../../Assets/logo.png" width="90px" alt="logo"></a>
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
            echo "<a href='".$row['link']."'>".$row['name']."</a>";
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
          echo "<button><a href='".$row['link']."'>".$row['name']."</a></button>";
        }
      ?>
    </div>
  </div>

  <div id="header">
    <div id="inner-header">
      <h1><span class="name">MYJ World</span></h1>
      <h2>Get to know the latest happenings on MYJ World</h2>
    </div>
  </div>

  <div class="space"></div>

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

        $query = $conn->query("SELECT * FROM `updates`ORDER BY id DESC");
        while ($row=$query->fetch_array(MYSQLI_ASSOC)) {
          echo "<div class='single-message center-elements center-text'>";
          echo "<div class='user-content center-elements center-text'>";
          echo "<div class='profile'>";
          echo "<i class='fa fa-pen-to-square'></i>";
          echo "</div>";
          echo "<div class='content'>";
          echo "<h3><span class='id-no'>".$row['id']."    </span>".$row['title']."</h3>";
          echo "<p>".$row['details']."</p>";
          echo "<p>".$row['date']."</p>";
          echo "</div>";
          echo "</div>";
          echo "<div class='mobile-feedback'>";
          echo "<div class='content'>";
          echo "<h3><span class='id-no'>".$row['id']."</span>  ".$row['title']."</h3>";
          echo "<p>".$row['details']."</p>";
          echo "<p style='text-align: right; width: 90%;'>".$row['date']."</p>";
          echo "</div>";
          echo "</div>";
          echo "</div>";
          echo "<div class='space'></div>";
          echo "<div class='space'></div>";
        }
        ?>

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
      <a href="../../policies/terms-of-use/">Terms of use</a> <br><br>
      <a href="../../policies/privacy-policy/">Privacy Policy</a>
    </div>
  </div>

  <div class="popup">
    <p>By using our website, you agree to our <a href="../../policies/terms-of-use/"> Terms of Use</a> &amp; <a href="../../policies/privacy-policy/">Privacy Policy</a></p>
    <button class="popup-btn">Accept & Continue</button>
  </div>

  <div id="copyright" class="floating-box" style="height: 40px;">
    <p style="font-size: 15px;">&copy;
      <script>document.write(new Date().getFullYear());</script> MYJ World
    </p>
  </div>

</body>
</html>