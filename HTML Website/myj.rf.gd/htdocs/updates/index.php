<html lang="en">
    <head>
        <title>Updates - MYJ World</title>
        <link rel="icon" href="../MYJ_icon_updated.png"/>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <div id="back-mobile">
            <a href="https://myj.rf.gd"><button>&#x25c0; Back to Home</button></a>
        </div>
    
        <div class="heading">
            <h1>Updates</h1>
        </div>
    
        <div class="cards">
            <?php
                $host="sql112.epizy.com";
                $dbuser="epiz_30389702";
                $dbpassword="VjgiAEJdCn4";
                $dbname="epiz_30389702_admin";
                $conn = new mysqli($host, $dbuser, $dbpassword, $dbname);
                $success = "Success!";
                $fail = "Not Connected";
                if($conn) {
                    echo "<script>console.log('{$success}' );</script>";
                }
                else {
                    echo "<script>console.log('{$fail}' );</script>";
                }
                $query = $conn->query("SELECT * FROM `updates`");
    
                while ($row=$query->fetch_array(MYSQLI_ASSOC)) {
                    echo "<div class='card1'>";
                    echo "<div class='left-card1'>";
                    echo "<p>Update#".$row['id'];
                    echo "<p> Update date: ".$row['date']."</p>";
                    echo "</div>";
                    echo "<div class='right-card1'>";
                    echo "<h2>".$row['title']."</h2>";
                    echo "<p>Details: ".$row['details']."</p>";
                    echo "</div>";
                    echo "</div>";
                }
            ?>
        </div>
    </body>
</html>