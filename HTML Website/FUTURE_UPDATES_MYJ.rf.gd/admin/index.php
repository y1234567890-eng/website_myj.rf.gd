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

        input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 2px 0;
            box-sizing: border-box;
            border: 3px solid #ccc;
            -webkit-transition: 0.5s;
            transition: 0.5s;
            outline: none;
        }

        input[type=password]:focus {
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
            <a href="https://myj.rf.gd"><button>&#x25c0; Back to Home</button></a>
        </div>
        
        <h1>Admin Login</h1>
        <div id="log-in-form">
            <form method="POST">
                <input type="text" name="username" placeholder="Username" required><br>
                <input type="password" name="password" placeholder="Password" required><br>
                <input type="submit" name="submit" value="Submit">
            </form>
        <div>
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

            if(isset($_POST['submit'])) {
                $username=$conn->real_escape_string($_POST['username']);
                $password=$conn->real_escape_string($_POST['password']);


                $query = $conn->query("SELECT * FROM adminaccounts");
                
                while ($row=$query->fetch_array(MYSQLI_ASSOC)) {
                    if ($username==$row['username']) {
                        if ($password == $row['password']) {
                            $correct = "true";
                            echo "<div id='logged-in'>";
                            echo "<div id='new-feature' class='default-box'>";
                            echo "<h2>Add Update</h2>";
                            echo "<div id='add-update' class='default-btn'>";
                            echo "<a href='new'><button>New Update</button></a>";
                            echo "</div></div></div>";
                            echo "<script>document.getElementById('log-in-form').style.display = none;</script>"
                        } else {
                            $correct="false";
                            echo "Password does not match with the username";                        }
                    } else {
                        $correct="false";
                        echo "<p>Username does not exist</p>";
                    }
                }
            }
        ?>
        <script>
            if(window.history.replaceState) {
                window.history.replaceState(null, null, window.location.href);
            }
        </script>
    </body>
</html>