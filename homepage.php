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
  <link rel="stylesheet" type="text/css" href='homepage.css'>
</head>
<body class="grid-container">
<div class="item1" >
    <div class="row topnav">
      <div class="col-sm-3"><div class="toplogo">
                <div class="topnav"><img src="logo.png" width="150" height="50"></div>
              </div></div>
      <div class="col-sm-3"><div class="topright">
              <a class="active" href="homepage.php">Home</a>
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
    </div>    
    
    <div class="item2">
    Left
    </div>
    
    <div>  
        <div class="row">
		  <div class="column">
		  	<div class="post">
		    <h4>Post</h4>
		    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Vivamus venenatis velit nec neque ultricies, eget elementum magna tristique. Quisque vehicula, risus eget aliquam placerat, purus leo tincidunt eros, eget luctus quam orci in velit. Praesent scelerisque tortor sed accumsan convallis.</p>
			</div>
	      </div>
		  <div class="column">
		  	<div class="post">
		    <h4>Post</h4>
		    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Vivamus venenatis velit nec neque ultricies, eget elementum magna tristique. Quisque vehicula, risus eget aliquam placerat, purus leo tincidunt eros, eget luctus quam orci in velit. Praesent scelerisque tortor sed accumsan convallis.</p>
		  </div>
		</div>
		  <div class="column">
		  	<div class="post">
		    <h4>Post</h4>
		    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Vivamus venenatis velit nec neque ultricies, eget elementum magna tristique. Quisque vehicula, risus eget aliquam placerat, purus leo tincidunt eros, eget luctus quam orci in velit. Praesent scelerisque tortor sed accumsan convallis.</p>
		  </div>
		</div>
		</div>

        
    </div>
    
    <div class="item4">Right</div>

    <div class="item5">Footer</div>
</div>
    
<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>    
    
</body>
</html>
<?php
    $connection = mysqli_connect('localhost','root','','talentin');
    
    if($connection)
        echo("connected");
    
    else
        die("connection failed"); 
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
