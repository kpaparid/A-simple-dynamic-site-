<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link href="ada.css" rel="stylesheet" type="text/css" />
<link href="ada-comments.css" rel="stylesheet" type="text/css" />

<!-- #BeginEditable "doctitle" -->
<title>Ada Lovelace</title>
<!-- #EndEditable -->
</head>
<body>
<div id="page">
	<div id="header">
		<a href="index.php">
		<img id="image" alt="" src="http://3.bp.blogspot.com/_KCuHoU9QBUU/Sw5A_FCqQCI/AAAAAAAAbCA/1MlBsAXA_Mg/s1600/ada_lovelace.jpg" /></a><div id="name" style="width: 546px">
			Ada Lovelace</div>
	</div>
	<div id="nagivation">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="bio.php">Bio</a></li>
			<li><a href="gallery.php">Gallery</a></li>
			<li><a href="work.php">Work</a></li>
			<li><a href="trivia.php">Trivia</a></li>
			<li  id="li"><a href="comments.php">Comments</a></li>
			<li><a href="quiz.php">Quiz</a></li>

		</ul>
	</div>
	<div id="paragraph"><!-- #BeginEditable "body" -->
	<h1 id="welcome">Comment Section</h1>
	<p class="home_par">Leave a comment below!</p>
	<div id="comments">
	<?php include "read-database.php"; ?>
	</div>
		<iframe style="display:none;" name="target"></iframe>
		<div id="form_div"><form id="form" action="sumbit-action.php" target="target" method="post" name="comment-submit">
			Email (optional):
			<input style="color:#B68848" maxlength="50" name="email" size="40" type="email" placeholder=" Enter your email" />
			<label><textarea class="input" cols="63" name="comment" required="required" rows="4" placeholder=" Type your comment here!">
</textarea></label>
			<input id="submit" class="input" type="submit" value="Post Comment" />
		</form> </div>
		<p></p>
	</div>
	<div id="footer">
		<h6 class="foot_h"><a href="index.php">Home </a>| <a href="bio.php">
		Bio</a> |<a  href="gallery.php"> Gallery</a> |<a href="work.php"> Work </a> 
		| <a href="trivia.php">Trivia</a> |<a href="comments.php"> Comments </a> |<a href="quiz.php"> Quiz </a> </h6>
		<h6 class="foot_h">Copyright © 2014 Computer Science Department of AUTH</h6>
		<h6 class="foot_h">Designed by Kostas Paparidis &amp; Thanasis Tolikas</h6>
	</div>
</div>
</body>
<!-- #EndTemplate -->

</html>
