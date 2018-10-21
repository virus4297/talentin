<?php
if(isset($_POST['submit'])){
    $username= $_POST['username'];
    $password= $_POST['password'];
//    echo ($username);
    $connection = mysqli_connect('localhost','root','','talentin');
    
    if($connection)
        echo("connected");
    
    else
        die("connection failed"); 

    $query= "INSERT INTO login(username,password) VALUES('$username','$password')";
    $result1=mysqli_query($connection,$query);
    if(!$result1){
        die("data cannot be sent");
    }
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>TalentIn Login or Sign up</title>
	<!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
	 <link rel="stylesheet" type="text/css" href='sign.css'>
</head>
<body background="talent.png">
<div class="topcont">
                <br><br><br><br><br><br>
	<form action="index.php" method="post">
                <div class="form-group">
                  <p>
                   <label for="Username">Username</label>
                    <input type="text" name="username" placeholder="Enter username" class="form-control">
                    </p>
                </div>
        
                <div class="form-group"><p>
                   <label for="Password">Password</label>
                    <input type="password"  name="password" placeholder="Enter password"  class="form-control">
                    
                </div>
               </p>

</div>
                <br><br><br><br><br><br><br><br>
                <div class="topcont">
                <br>
                <input type="submit" class="btn btn-primary" name="submit" value="submit">
                <a href="homepage.php"> <input type="button" class="btn btn-primary" value="Guest">
                   <a href="signup.php"> <input type="button" class="btn btn-primary" value="Register">
                
                </a>
</a>
</div>
</form>

</body>
</html>