<?php
if($_POST["Message"]) {
mail("myousufjamil@hotmail.com", "User Message",
$_POST["Insert Your Message"]. "From: myousufjamil@hotmail.com");
}
?>