<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap - Prebuilt Layout</title>

<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<html>
  <body>

    
    <div class="container">
      <h1>image here lads </h1>
      <div class="row">
    <div class="col-md-4">
      <div class="panel panel-default">
        <div class="panel-heading">Form</div>
        <div class="panel-body">
          <form role="form" enctype="multipart/form-data" action="upload_file.php" method="POST">
            <div class="form-group">
              <input type="file" class="form-control" name="file" id="file" placeholder="" multiple>
            </div>
            <button type="submit" class="btn btn-success">Upload files</button>
          </form>
        </div>
      </div>
    </div>
    <div class="col-md-8">
      <div class="panel panel-default">
        <div class="panel-heading">Files list</div>
        <div class="panel-body">
          <div class="files-list">
<div class="file"> 
       <ul> 
<?php 
		   $dir = opendir('ftp/'); 
echo '<ul>';
while ($read = readdir($dir)) 
{

if ($read!='.' && $read!='..') 
{ 
echo '<li><a href="files/'.$read.'">'.$read.'</a></li>'; 
}

}

echo '</ul>';

closedir($dir); 
	?>

</ul> 
         
         
         </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>



<script src="js/jquery-1.11.3.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>
</body>
</html>
