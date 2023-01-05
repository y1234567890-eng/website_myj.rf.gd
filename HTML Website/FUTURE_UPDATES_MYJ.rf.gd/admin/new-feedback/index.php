<html>
    <head>
        <link rel="icon" href="https://www.myj.rf.gd/MYJ_icon_updated.png">
        <meta name="viewport" content="width=device-width">
        <title>Admin login</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Spline+Sans:wght@300;400&display=swap');
        body {
            font-family: "Spline Sans", sans-serif;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        table {
            width: 1000px;
            margin: auto;
            justify-content: center;
            align-items: center;
            text-align: center;
            margin-top: 10px;
            margin-bottom: 50px;
        }
        td {
            padding: 20px;
        }
        #back-mobile {
            margin: 10px;
            position: fixed;
        }


        #back-mobile button {
            background-color: #04AA6D;
            border: none;
            color: #FFFFFF;
            padding: 10px 10px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 8px;
            transition-duration: 0.4s;
            border: 2px solid #4CAF50;
        }
        #back-mobile button:hover {
            transform: scale(1.1);
            background: #ffffff;
            color: #000000;
            border: 2px solid #4CAF50;
        }

        .default-btn {
            /* display: none; */
            /* margin: 10px; */
            /* position: fixed; */
            justify-content: center;
            align-items: center;
            text-align: center;
            width: 100%;
        }
        .default-btn button {
            background-color: #04AA6D;
            border: none;
            color: #FFFFFF;
            padding: 10px 10px;
            text-decoration: none;
            /* bottom: 4px; */
            /* margin-right: auto; */
            /* margin-left:auto; */
            /* left: 50%; */
            /* right: 50%; */
            /* transform: translate(-50%, -50%); */
            cursor: pointer;
            border-radius: 8px;
            transition-duration: 0.4s;
            border: 2px solid #4CAF50;
        }
        .default-btn button:hover {
            transform: scale(1.1);
            background: #ffffff;
            color: #000000;
            border: 2px solid #4CAF50;
        }
        .default-box {
            /* display: none; */
        }
        input[type=text] {
            width: 100%;
            padding: 12px 20px;
            margin: 2px 0;
            box-sizing: border-box;
            border: 3px solid #ccc;
            -webkit-transition: 0.5s;
            transition: 0.5s;
            outline: none;
        }

        input[type=text]:focus {
            border: 3px solid #555;
        }

        input[type=email] {
            width: 100%;
            padding: 12px 20px;
            margin: 2px 0;
            box-sizing: border-box;
            border: 3px solid #ccc;
            -webkit-transition: 0.5s;
            transition: 0.5s;
            outline: none;
        }

        input[type=email]:focus {
            border: 3px solid #555;
        }

        input[type=date] {
            width: 100%;
            padding: 12px 20px;
            margin: 2px 0;
            box-sizing: border-box;
            border: 3px solid #ccc;
            -webkit-transition: 0.5s;
            transition: 0.5s;
            outline: none;
        }

        input[type=date]:focus {
            border: 3px solid #555;
        }

        input[type=submit] {
            background-color: #04AA6D;
            border: none;
            color: #FFFFFF;
            padding: 16px 32px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 8px;
            transition-duration: 0.4s;
            border: 2px solid #4CAF50;
        }

        input[type=submit]:hover {
            transform: scale(1.1);
            background-color: #ffffff;
            color: #000000;
            border: 2px solid #4CAF50;
        }
    </style>
    </head>
    <body>
        <div id="back-mobile">
            <a href="https://myj.rf.gd/admin"><button>&#x25c0; Back</button></a>
        </div>
        
        <h1>Admin Login</h1>
        <div>
        <p>Your username is: <?php echo $_POST["username"]; $username = $_POST["username"];?></p>
        <?php
            $host="sql112.epizy.com";
            $dbuser="epiz_30389702";
            $dbpassword="VjgiAEJdCn4";
            $dbname="epiz_30389702_admin";
            $conn = new mysqli($host, $dbuser, $dbpassword, $dbname);
            $success = "Success!";
            $fail = "Not Connected";
            $correct = "false";
            if($conn) {
                echo "<script>console.log('{$success}' );</script>";
            }
            else {
                echo "<script>console.log('{$fail}' );</script>";
            }

            $query = $conn->query("SELECT * FROM adminaccounts");
            
            while ($row=$query->fetch_array(MYSQLI_ASSOC)) {
                if ($username==$row['username']) {
                    $correct = "true";
                    echo "<form method='POST'>";
                    echo "<input type='hidden' name='username' value='".$username."'/>";
                    echo "<input type='text' name='title' placeholder='Title'/>";
                    echo "<input type='text' name='details' placeholder='Details'/>";
                    echo "<input type='date' name='date' placeholder='Date'/>";
                    echo "<input type='submit' name='submit' value='Post'/>";
                    echo "</form>";
                    } else {
                    $correct="false";
                    echo "<p>Error</p>";
                }
            }
        ?>

        <?php 
            if(isset($_POST['submit'])) {
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
                $title=$conn->real_escape_string($_POST['title']);
                $details=$conn->real_escape_string($_POST['details']);
                $date=$conn->real_escape_string($_POST['date']);
                $conn->query("INSERT INTO updates (title, details, date) VALUES ('$title','$details','$date')");
                echo "<br><p>Posted</p>";
            }
        ?>
        </div>
        <script>
            if(window.history.replaceState) {
                window.history.replaceState(null, null, window.location.href);
            }
        </script>
    </body>
</html>