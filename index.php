<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Article Management System</title>
<link type="text/css" href="/css/1.css" rel="stylesheet" media="screen" />
</head>

<body>
<div id="submit_form">
<b>Submit Your Article:</b><br />
<form action="article_controller.php" method="post">
Title: <input type="text" name="title" id="title" /><br />
Author: <input type="text" name="author" />
Date: <input type="date" name="date" /><br />
Excerpt:<br />
<textarea id="excerpt" name="excerpt"></textarea><br />
Article:<br />
<textarea id="body" name="body"></textarea><br />
Choose Category:<br />
Business <input type="checkbox" value="category" name="business" />
Tech <input type="checkbox" value="category" name="tech"/>
Science <input type="checkbox" value="category" name="science"/>
Automotive <input type="checkbox" value="category" name="automotive"/><br />
<input type="submit" value="Publish" />
</form>
</div>

<?php

?>

</body>
</html>
