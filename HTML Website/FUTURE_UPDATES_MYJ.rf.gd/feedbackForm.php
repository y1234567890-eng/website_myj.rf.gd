<html>
    <head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Spline+Sans:wght@300;400&display=swap');
        .form {
            font-family: "Spline Sans", sans-serif;
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
    </style>
    </head>
    <body>
        <?php
            $host="url";
            $dbuser="epiz_30389702";
            $dbpassword="VjgiAEJdCn4";
            $dbname="epiz_30389702_feedback";
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
                $conn->query("INSERT INTO form (name,email,message) VALUES ('$name','$email','$message')");
                echo "<br><h1 id='sent'>Submitted</h1>";

                // $sender = "contact.us.myj@gmail.com"
                // mail($sender,$name,$message,$email)
            }
        ?>

        <div id="feedback" class="form">
        <form method="POST">
            <input type="text" name="name" placeholder="Name" required><br>
            <input type="email" name="email" placeholder="Email" required><br>
            <input type="text" name="message" placeholder="Message" required><br>
            <input type="submit" name="submit" value="Submit">
        </form>
        <p>Note this form is under development and will improve</p>
        </div>
        <script>
            if(window.history.replaceState) {
                window.history.replaceState(null, null, window.location.href);
            }
        </script>
    </body>
</html>