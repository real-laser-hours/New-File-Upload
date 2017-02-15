<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title></title>
</head>
<?php
  $files = scandir("ftp/");
  $oldfolder = "ftp/";
  $newfolder = "ftp/old/";
  foreach($files as $fname) {
      if($fname != '.' && $fname != '..') {
          rename($oldfolder.$fname, $newfolder.$fname);
      }
  }
?>
<body>
</body>
</html>