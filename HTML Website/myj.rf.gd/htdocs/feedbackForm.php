<html>
    <head>
        <link rel="icon" href="https://www.myj.rf.gd/MYJ_icon_updated.png">
        <title>Feedback Form</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Spline+Sans:wght@300;400&display=swap');
        body {
            font-family: "Spline Sans", sans-serif;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .form {
            font-family: "Spline Sans", sans-serif;
            padding-top: 50px;
            padding-right: 300px;
            padding-left: 300px;
        }
        #feedback-div {
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
    </style>
    </head>
    <body>
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

            if(isset($_POST['submit'])) {
                $name=$conn->real_escape_string($_POST['name']);
                $email=$conn->real_escape_string($_POST['email']);
                $message=$conn->real_escape_string($_POST['message']);
                $conn->query("INSERT INTO feedback (name,email,message) VALUES ('$name','$email','$message')");

                // $sender = "contact.us.myj@gmail.com"
                // mail($sender,$name,$message,$email)
            }
        ?>

        <div id="back-mobile">
            <a href="https://myj.rf.gd"><button>&#x25c0; Back to Home</button></a>
        </div>

        <div id="feedback-div" class="form">
            <h1>Feedback Form</h1>
            <form method="POST">
                <input type="text" name="name" placeholder="Name" required><br>
                <input type="email" name="email" placeholder="Email" required><br>
                <input type="text" name="message" placeholder="Message" required><br>
                <input type="submit" name="submit" value="Submit">
            </form>
            <?php
            if(isset($_POST['submit'])) {
                echo "<br><p><i>Submitted</i></p>";
            }
        ?>
            <p>Note this form is under development and expect updates to this form</p>
        </div>

        <div id="existing">
            <h2>Existing Feedbacks</h2>
            <p id="none"></p>
            <?php
                $query = $conn->query("SELECT * FROM feedback");
                // $num = $query->num_rows();
                // ORDER BY DESC;
                while ($row=$query->fetch_array(MYSQLI_ASSOC)) {
                    echo "<table border='2'>";
                    echo "<tr><td>";
                    echo "<h1>".$row['name']."</h1></td></tr>";
                    echo "<tr><td>".$row['message']."<br><br></td></tr>";
                    echo "</table>";
                }
                // echo "<script>if($num===0) {document.getElementById('none').innerHTML = 'New text!';}</script>";
            ?>
        </div>
        <script>
            if(window.history.replaceState) {
                window.history.replaceState(null, null, window.location.href);
            }
        </script>
    </body>
</html>