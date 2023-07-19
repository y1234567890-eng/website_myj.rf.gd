<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>MYJ World - Feedback - New Feedback</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <link rel="icon" href="../../../Assets/logo_no_bg.png">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.0/css/all.css">
</head>

<body>
  <nav>
    <div id="inner-nav">
      <div id="logo">
        <a href="https://myj-worldv2.myousufjamil.repl.co/"><img src="../../../Assets/logo.png" width="90px"
            alt="logo"></a>
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

  <div class="new-feedback">
    <h1>New Feedback</h1>
    <h2>Add your feedback to the list</h2>
    <div class="line"></div>

    <script src="../../../Assets/ckeditor/ckeditor.js"></script>

    <form>
      <input type="text" placeholder="Enter your name..." required /><br><br>
      <input type="email" placeholder="Enter email for contact..." required /><br>
      <p style="color: #ccc; font-size: 10px;">Your email won't be visible to the public. It will be used for contact
        purposes only.</p><br>
      <textarea id="feedback-editor" placeholder="Enter your feedback..." required></textarea><br>
      <input type="checkbox" id="agree-terms-privacy" required />
      <label for="agree-terms-privacy">I agree to the <a href="#">Terms of use</a> &amp; <a href="#">Privacy
          Policy</a></label><br><br>
      <button type="submit">Submit</button>
    </form>
    <p>Please ensure that you enter a true and honest feedback, & please don't forget to tell us how we can improve our
      service.</p>

    <script>CKEDITOR.replace('feedback-editor')</script>
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