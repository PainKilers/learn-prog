<?php
date_default_timezone_set('EET');

include 'functions.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New page</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

<video width="320" height="240" controls>
    <source src="movie.mp4" type="video/mp4">
    <source src="movie.ogg" type="video/ogg">
    Your browser does not support the video tag.
</video>
<?php
echo "
<form method='POST' action='".saveComments()."'>     
<label for='name'>
Name:<input type='text' name='name'>
</label>
<br>
<br>
<label for='email'>
Email:<input type='email' name='email'>
</label>
<input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
<br>
<br>
<label for='comment'>
Comment:<textarea name='comment'></textarea>
</label>
<br>
<button type='submit' name='commentSubmit'>Comment</button>
</form>";
?>
<?php showComments(); ?>
</body>
</html>