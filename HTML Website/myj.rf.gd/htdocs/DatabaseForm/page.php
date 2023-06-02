<html>
    <head>
        <title>Feedback Page</title>
    </head>
    <body>
    <?php
            $host="sql112.epizy.com";
            $dbuser="epiz_30389702";
            $dbpassword="VjgiAEJdCn4";
            $dbname="epiz_30389702_database";
            $conn = new mysqli($host, $dbuser, $dbpassword, $dbname);
            if($conn) {
                echo "Success!";
            }
            else {
                echo "Not Connected";
            }

            $query = $conn->query("SELECT * FROM form");
            echo "<table border='2'>";
            while ($row=$query->fetch_array(MYSQLI_BOTH)) {
                echo "<tr><td>";
                echo "<h1>".$row['1']."</h1></td>";
                echo "<td><h2>".$row['2']."</h2></td>";
                echo "<td>".$row['3']."<br><br></td></tr>";
                echo "<td>".$row['4']."<br><br></td></tr>";
            }
            echo "</table>";



























    ?>
    </body>
</html>