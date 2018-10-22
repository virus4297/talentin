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
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="signup.css">
</head>
<body background="talent.png">
	<div class="topcont">
		<h2>Sign Up Here!!</h2>
		<form>
			
				<div class="col"><label for="username">NAME:</label>
				<input type="text" name="name" placeholder="Name"></input></div>
				
				<div class="col">
				<label for="password">Password:</label>
				<input type="password" name="password" placeholder="Password"></input>
				</div>
				
				<div class="col">
				<label for="password">Confirm Password</label>
				<input type="password" name="password" placeholder="Confirm Password"></input>
				</div>

				<div class="col">
				<label for="ussn">Usn</label>
				<input type="text" name="Usn" placeholder="USN"></input>
				</div>
				
				<div class="col">
				<label for="email">Email</label>
				<input type="email" name="email" placeholder="Email"></input>
				</div>
				
				<div class="col">
				<label for="phone">Phone Number</label>
				<input type="text" name="phone number" placeholder="phone number"></input>
				</div>
				
				<div class="col">
				<div class="g">Gender:
					<br>
				Male<input type="radio" name="gender" value="gender">
				Female<input type="radio" name="gender" value="gender"></div>
				<br>
				<br>
				<label for="department">Deprtment</label>
				<select id="department" name="department">
	      <option value="CSE">CSE</option>
	      <option value="ISE">ISE</option>
	      <option value="EEE">EEE</option>
	      <option value="ECE">ECE</option>
	      <option value="MECH">MECH</option>
	      <option value="CIVIL">CIVIL</option>
	      </select>
				<br>
	       <input type="submit" value="Submit">
	</form>	
</div>
</body>
</html>