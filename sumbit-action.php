<?php

$link = mysqli_connect("localhost", "jon", "22211", "ada");
if (!$link) {
echo "Couldn't connect!";
}
else {
$email = mysqli_real_escape_string($link, $_POST['email']);
$email = htmlspecialchars($email, ENT_QUOTES);
$comment =mysqli_real_escape_string($link, $_POST['comment']);
$comment = htmlspecialchars($comment, ENT_QUOTES);
date_default_timezone_set('EET');
$date = date("Y-m-d H:i:s");

$query = "INSERT INTO comments (email,comment,date) VALUES ('$email', '$comment', '$date')";
mysqli_query($link,$query);
@mysqli_close($link); 
echo '<script>parent.window.location.reload(true);</script>'; 
}
?>