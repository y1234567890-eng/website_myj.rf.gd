<html>

<head>
    <link rel="icon" href="../MYJ_icon_updated.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width">
    <title>MYJ Services</title>
</head>

<body>
    <div id="back-mobile">
        <a href="https://myj.rf.gd"><button>&#x25c0; Back to Home</button></a>
    </div>

    <!-- <p id="coming-soon">Coming Soon</p> -->

    <div class="cards">
        <?php
            $host="sql112.epizy.com";
            $dbuser="epiz_30389702";
            $dbpassword="VjgiAEJdCn4";
            $dbname="epiz_30389702_database";
            $conn = new mysqli($host, $dbuser, $dbpassword, $dbname);
            $success = "Success!";
            $fail = "Not Connected";
            if($conn) {
                echo "<script>console.log('{$success}' );</script>";
            }
            else {
                echo "<script>console.log('{$fail}' );</script>";
            }
            $query = $conn->query("SELECT * FROM services");

            while ($row=$query->fetch_array(MYSQLI_ASSOC)) {
                echo "<div class='card1'>";
                echo "<div class='left-card1'>";
                echo "<img src='".$row['logo']."' alt='".$row['name']."' width='80px'>";
                echo "<p>".$row['name']."</p>";
                echo "<a href='".$row['url']."'><button>Try service ></button></a>";
                echo "</div>";
                echo "<div class='right-card1'>";
                echo "<h2>".$row['name']."</h2>";
                echo "<p>Description: ".$row['description']."</p>";
                echo "</div>";
                echo "</div>";
            }
        ?>
    </div>

    <script type='text/javascript'>
        (function(I, L, T, i, c, k, s) {
            if (I.iticks) return;
            I.iticks = {
                host: c,
                settings: s,
                clientId: k,
                cdn: L,
                queue: []
            };
            var h = T.head || T.documentElement;
            var e = T.createElement(i);
            var l = I.location;
            e.async = true;
            e.src = (L || c) + '/client/inject-v2.min.js';
            h.insertBefore(e, h.firstChild);
            I.iticks.call = function(a, b) {
                I.iticks.queue.push([a, b]);
            };
        })(window, 'https://cdn-v1.intelliticks.com/prod/common', document, 'script', 'https://app.intelliticks.com', '24dSCuYprvQfPp73d_c', {});
    </script>
</body>




</html>