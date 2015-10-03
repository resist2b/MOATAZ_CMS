<!DOCTYPE html>
<html lang="en">
<head>
<meta charset=utf-8 />
<title>{$title}</title>

<!-- this link will be substituted with the right path : href="THEMES/acid/style.css" -->
<link href="style.css" type="text/css" rel="stylesheet" >
</head>
<body>

    <h1>Image resize plugin</h1>

    Original image <img src="img/wysiwyg.jpg"/><br><br><br>
    
    Resized and cropped image <img src="img/wysiwyg.jpg" width="100" height="70" /><br><br><br>

    Image resized but not cropped <img src="img/wysiwyg.jpg" width="100" height="70" crop="false"/><br><br><br>
    
    This image is not resized by PHP, only by the browser: <img src="img/wysiwyg.jpg" width="100" height="70" resize="false"/><br><br><br>

    <hr>

    Original image <img src="img/logo.jpeg"/><br><br><br>

    Resized <img src="img/logo.jpeg" width="60"/><br><br><br>

    Resized and Cropped <img src="img/logo.jpeg" width="100" height="60"/><br><br><br>


</body>
</html>