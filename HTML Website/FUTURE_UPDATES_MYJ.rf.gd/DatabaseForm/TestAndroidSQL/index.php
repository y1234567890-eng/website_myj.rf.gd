<?php
    $host="sql112.epizy.com";
    $dbuser="epiz_30389702";
    $dbpassword="VjgiAEJdCn4";
    $dbname="epiz_30389702_database";
    $conn = new mysqli($host, $dbuser, $dbpassword, $dbname);

    $id = $_POST["id"];
    $query = $conn->query("SELECT * FROM form");
    while ($row=$query->fetch_array(MYSQLI_ASSOC)) {
        if ($row["id"]==$id) {
            echo "Message: ".$row["message"];
        }
    }
?>