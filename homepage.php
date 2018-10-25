<!DOCTYPE html>
<html>
<head>
	<title>Homepage!!!</title>
	<link rel="stylesheet" type="text/css" href='homepage.css'>
</head>
<body>
<div class="topnav grd">
	<br>
	<h1>Welcome to</h1>	
	<img src="logo.png">
</div>
<br>
	<div class="topsnav">
		<ul>
		<li><a href="homepage.php">Home</a></li>
		<li><a href="categories.php">Discover</a></li>
		<li><a href="signup.php">Sign Up</a></li>
		<li><a href="contact.php">Contact and Support</a></li>	
		</ul>
		<br>
		<br>
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
