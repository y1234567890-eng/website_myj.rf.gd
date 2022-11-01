<html>
    <head>
        <link rel="icon" href="https://www.myj.rf.gd/MYJ_icon_updated.png">
        <meta name="viewport" content="width=device-width">
        <title>Feedback Form</title>
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
            /* display: none; */
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
            display: none;
        }
    </style>
    </head>
    <body>
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

            if(isset($_POST['submit'])) {
                $username=$conn->real_escape_string($_POST['username']);
                $password=$conn->real_escape_string($_POST['password']);
                // $date=date('d/m/y h:i:s',strtotime('+4 hour'));
                // $conn->query("INSERT INTO feedback (title,details,date) VALUES ('$title','$details','$date')");

                // $sender = "contact.us.myj@gmail.com"
                // mail($sender,$name,$message,$email)

                $query = $conn->query("SELECT * FROM adminaccounts");
                // $num = $query->num_rows();
                // ORDER BY DESC;
                while ($row=$query->fetch_array(MYSQLI_ASSOC)) {
                    // echo "<table border='2'>";
                    // echo "<tr><td>";
                    // echo "<h1>".$row['name']."</h1></td></tr>";
                    // echo "<tr><td>".$row['message']."<br><br></td></tr>";
                    // echo "<tr><td><b>Admin reply:</b><br><p style='text-align: left;'>Dear User,<br>".$row['reply']."</p></td></tr>";
                    // echo "</table>";
                    if ($username==.row['title']) {
                        if($password==.row['password']) {
                            echo "<script>document.getElementById('logged-in').style.display = 'box';</script>";
                            echo "<script>document.getElementById('log-in-form').style.display = 'none';</script>";
                        }
                    }
                }
            }
        ?>
        <div id="back-mobile">
            <a href="https://myj.rf.gd"><button>&#x25c0; Back to Home</button></a>
        </div>
        
        <h1>Admin Login</h1>
        <div id="logged-in">
            <div id="new-feature" class="default-box">
                <h2>Add Update</h2>
                <div id="add-update" class="default-btn">
                    <a href="new"><button>New Update</button></a>
                </div>
            </div>
        </div>
        <div id="log-in-form">
            <form method="POST">
                <input type="text" name="username" placeholder="Username" required><br>
                <input type="password" name="password" placeholder="Password" required><br>
                <input type="submit" name="submit" value="Submit">
            </form>
        <div>
        <script>
            if(window.history.replaceState) {
                window.history.replaceState(null, null, window.location.href);
            }
        </script>
    </body>
</html>