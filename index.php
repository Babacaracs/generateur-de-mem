<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="https://html2canvas.hertzen.com/dist/html2canvas.js">
	<title>Meme generator</title>
</head>
<body>

	
</body>
</html>

<?php 
 require_once './vendor/autoload.php';
// open an image file
$img = Image::make('img/test.jpg');

// now you are able to resize the instance
$img->resize(320, 240);

// and insert a watermark for example
$img->insert('img/test1.jpg');

// finally we save the image as a new file
$img->save('img/test1.jpg');

?>