<html>
    <head>
    <style>
        #sent {
            color: blue;
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
            if($conn) {
                echo "Success!";
            }
            else {
                echo "Not Connected";
            }

            if(isset($_POST['submit'])) {
                $name=$conn->real_escape_string($_POST['name']);
                $email=$conn->real_escape_string($_POST['email']);
                $message=$conn->real_escape_string($_POST['message']);
                $conn->query("INSERT INTO form (name,email,message) VALUES ('$name','$email','$message')");
                echo "<br><h1 id='sent'>Sent</h1>";

                // $sender = "contact.us.myj@gmail.com"
                // mail($sender,$name,$message,$email)
            }
            





        ?>

        <form method="POST">
            <input type="text" name="name" placeholder="Name">
            <input type="email" name="email" placeholder="Email">
            <input type="text" name="message" placeholder="Message">
            <input type="submit" name="submit" value="Submit">
        </form>
        <script>
            if(window.history.replaceState) {
                window.history.replaceState(null, null, window.location.href);
            }
        </script>
    </body>
</html>