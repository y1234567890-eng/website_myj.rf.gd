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
        <a href="https://myj.rf.gd/expected/v1/"><img src="../Assets/logo.png" width="90px" alt="logo"></a>
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
              echo "<a id='services' href='".$row['link']."' style='color: #a6f2ff;'>".$row['name']."</a>";
            } else {
              echo "<a href='".$row['link']."'>".$row['name']."</a>";
            }
          }

          
          $filter = "";

          if (isset($_GET)) {
            $filter = $_GET['query'];
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
            echo "<button><a id='home' href='".$row['link']."' style='color: #a6f2ff;'>".$row['name']."</a></button>";
          } else {
            echo "<button><a href='".$row['link']."'>".$row['name']."</a></button>";
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
  <div style="display: flex;" class="center-elements center-text">
  <form method="GET"><input name="query" type="hidden" value=""/><button type="submit" <?php if(strpos($filter, "category") !== false) {} else {echo "style='filter: invert();'";} ?> class="margined"><a>All</a></button></form>
  <form method="GET"><input name="query" type="hidden" value="category:Services"/><button type="submit" <?php if ($filter == "category:Services") {echo "style='filter: invert();'";}?> class="margined"><a>Online Services</a></button></form>
  <form method="GET"><input name="query" type="hidden" value="category:Play+Store"/><button type="submit" <?php if ($filter == "category:Play+Store") {echo "style='filter: invert();'";}?> class="margined"><a>Play Store</a></button></form>
  <form method="GET"><input name="query" type="hidden" value="category:Scratch"/><button type="submit" <?php if ($filter == "category:Scratch") {echo "style='filter: invert();'";}?> class="margined"><a>Scratch</a></button></form>
  <!-- <form method="GET"><button type="submit" class="margined"><a>YouTube</a></button></form> -->
  <!-- <button><a>Islamic Content (To be added with search option as filter)</a></button> -->
  </div>

  <div class="search">
    <form method="GET">
      <?php echo "<input name='query' type='text' placeholder='Search for a service...' value='".$filter."'/>"; ?>
      <button type="submit"><i class="fas fa-search"></i></button>
    </form>
  </div>

  <?php
    if ($filter != "category:Play+Store" && $filter != "category:Scratch") {
      if (strpos($filter, "category") !== false) {
        $query = $conn->query("SELECT * FROM `services`");
      } else {
        $query = $conn->query("SELECT * FROM `services` WHERE `name` LIKE '%".$filter."%'");
      }
    while ($row=$query->fetch_array(MYSQLI_ASSOC)) {
      echo "<div class='item'>";
      echo "<div class='item-left'>";
      echo "<img src='".$row['logo']."' alt='Logo' />";
      echo "<h2>".$row['name']."</h2>";
      echo "<p>Price: ".$row['price']."</p>";
      echo "<p>Category: ".$row['category']."</p>";
      echo "<button><a href='".$row['url']."'>Try service <i class='fas fa-arrow-right'></i></a></button>";
      echo "</div>";
      echo "<div class='item-right'>";
      echo "<h2>".$row['name']."</h2>";
      echo "<p>".$row['description']."</p>";
      echo "</div>";
      echo "<div class='item-mobile'>";
      echo "<img src='".$row['logo']."' alt='Logo' />";
      echo "<h2>".$row['name']."</h2>";
      echo "<p>Price: ".$row['price']."</p>";
      echo "<p>".$row['description']."</p>";
      echo "<button><a href='".$row['url']."'>Try service <i class='fas fa-arrow-right'></i></a></button>";
      echo "</div>";
      echo "</div>";
    }
    }

    if ($filter != "category:Services" && $filter != "category:Scratch") {
      if (strpos($filter, "category") !== false) {
        $query = $conn->query("SELECT * FROM `play-store`");
      } else {
        $query = $conn->query("SELECT * FROM `play-store` WHERE `name` LIKE '%".$filter."%'");
      }
    while ($row=$query->fetch_array(MYSQLI_ASSOC)) {
      echo "<div class='item'>";
      echo "<div class='item-left'>";
      echo "<img src='".$row['logo']."' alt='Logo' />";
      echo "<h2>".$row['name2']."</h2>";
      echo "<p>Price: ".$row['price']."</p>";
      echo "<p>Category: Play Store</p>";
      echo "<button><a href='".$row['url']."'>Try service <i class='fas fa-arrow-right'></i></a></button>";
      echo "</div>";
      echo "<div class='item-right'>";
      echo "<h2>".$row['name2']."</h2>";
      echo "<p>".$row['description']."</p>";
      echo "</div>";
      echo "<div class='item-mobile'>";
      echo "<img src='".$row['logo']."' alt='Logo' />";
      echo "<h2>".$row['name']."</h2>";
      echo "<p>Price: ".$row['price']."</p>";
      echo "<p>".$row['description']."</p>";
      echo "<button><a href='".$row['url']."'>Try service <i class='fas fa-arrow-right'></i></a></button>";
      echo "</div>";
      echo "</div>";
    }
    }

    if ($filter != "category:Play+Store" && $filter != "category:Services") {
      if (strpos($filter, "category") !== false) {
        $query = $conn->query("SELECT * FROM `scratch`");
      } else {
        $query = $conn->query("SELECT * FROM `scratch` WHERE `name` LIKE '%".$filter."%'");
      }
    while ($row=$query->fetch_array(MYSQLI_ASSOC)) {
      echo "<div class='item'>";
      echo "<div class='item-left'>";
      echo "<img src='https://myj.rf.gd/scratch/scratch.png' alt='Logo' />";
      echo "<h2>".$row['name']."</h2>";
      echo "<p>Category: Scratch</p>";
      echo "<button><a href='".$row['url']."'>Try service <i class='fas fa-arrow-right'></i></a></button>";
      echo "</div>";
      echo "<div class='item-right'>";
      echo "<h2>".$row['name']."</h2>";
      echo "<p>".$row['description']."</p>";
      echo "</div>";
      echo "<div class='item-mobile'>";
      echo "<img src='https://myj.rf.gd/scratch/scratch.png' alt='Logo' />";
      echo "<h2>".$row['name']."</h2>";
      echo "<p>".$row['description']."</p>";
      echo "<button><a href='".$row['url']."'>Try service <i class='fas fa-arrow-right'></i></a></button>";
      echo "</div>";
      echo "</div>";
    }
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
      <a href="../policies/terms-of-use/">Terms of use</a> <br><br>
      <a href="../policies/privacy-policy/">Privacy Policy</a>
    </div>
  </div>

  <div class="popup">
    <p>By using our website, you agree to our <a href="../policies/terms-of-use/"> Terms of Use</a> &amp; <a href="../policies/privacy-policy/">Privacy Policy</a></p>
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