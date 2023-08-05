<?php
  error_reporting(0);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Image Upload</title>
</head>
<body>
  <h1>Image Upload</h1>
  <form id="imageUploadForm" method="POST" enctype="multipart/form-data" action="">
    <input type="file" name="filename" id="imageUpload" accept="image/*">
    <input type="submit" name="submit" value="Upload file">
  </form>  
</body>
</html>

<?php

$filename = $_FILES["filename"]["name"];
$tempname = $_FILES["filename"]["tmp_name"];
$folder = "upload/".$filename;
echo $folder;
move_uploaded_file($tempname,$folder);
echo $tempname;


?>
