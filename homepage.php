<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="innn.png" />
<title>Homepage</title> 
  <link rel="stylesheet" type="text/css" href='homepage.css'>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

    <div class="row topnav">
  <div class="col-sm-3"><div class="toplogo">
	  		<div class="topnav"><img src="logo.png" width="150" height="50"></div>
	  	  </div></div>
  <div class="col-sm-3"><div class="topright">
		  <a href="homepage.php">Home</a>
		  <a href="discover.html">Discover</a>
		  <a href="#about">About</a>
		  <a href="#contact">Contact</a>
		</div></div>
  <div class="col-sm-3"></div>
  <div class="col-sm-3"><div class="profilebutton"> 
		  	<a href="profile.html" >Profile</a>
		  	<div class="topnav"><img src="viral.jpg" width="50" height="50"></div>
		  	</div></div>
</div>
    
	<div class="box enclose"><img src="viral.jpg"><p>Name: Viral<br>
	age: idk <br> Description: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>

	<div class="box enclose"><img src="viral.jpg"><p>Name: Viral<br>
	age: idk <br> Description: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>

</body>
</html>
<?php
    $connection = mysqli_connect('localhost','root','','talentin');
    
    if(!$connection)
        echo("not connected");
    $query= "SELECT postcontent,postdate  FROM post ";
    $result=mysqli_query($connection,$query);
    while($result1 = mysqli_fetch_object($result)){ 
        ?>
        <div class="box enclose"><p>
        <?php
        printf("%s (%s)\n",$result1->postcontent,$result1->postdate);  
        ?>
</p></div>
   <?php
        
    }
?>    
