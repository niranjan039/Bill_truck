<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my";

$conn =mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Customer login
if(isset($_POST['customer_submit'])) 
{

        header("Location: customer.php");
        echo "<b> WELCOME<br>!";
    
}

// Admin login
if(isset($_POST['admin_submit'])) {
    $admin_username = $_POST['admin_username'];
    $admin_password = $_POST['admin_password'];
   
    $query = "SELECT * FROM admin WHERE username='$admin_username' AND password='$admin_password'";
    $result = $conn->query($query);
    if($result->num_rows > 0) {
        header("Location: admin.php");
        echo "<script> alert('Admin logged in successfully!')</script>";
    } else {
        echo "<script> alert('Invalid admin credentials!')</script>";
    }
}

$conn->close();
?>

<html>
<head>
    <title>Login page</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    {
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        width: 320px;
    }

    
     .inp1 ,.inp2 {
        width: 180px;
        padding: 10px;
	position:relative;
	left:8px;
        margin-bottom: 20px;
        border: 1px solid #ddd;
        border-radius: 15px;
	box-shadow:1px 1px 2px grey;
    }
.inp1:hover {
        box-shadow:1px 1px 8px black;
}
.inp2:hover {
        box-shadow:1px 1px 8px black;
}


    .btn1{
	top:10px;
        width:95px;
        padding: 7px;
        border: none;
        border-radius:10px;
        background-color:teal;
        color: #fff;
        cursor: pointer;
	position:relative;
	left:50px;
	
    }

    .btn1:hover {
          background: rgba(0,0,0,0);
	color: #3a7999;
	//color:black;
	box-shadow: inset 0 0 0 3px  #3a7999 ;
    }
	body{
	background-image:url("img2.jpg");
	background-size:cover;
	width:100%;
	height:100%;
	 
	 
		
}
.cont{
	//border:1px solid black;
	width:300px;
	height:300px;
	display:flex;
	flex-direction:column;
	justify-content:center;
	align-items:center;
	background-color:transparent;
	backdrop-filter:blur(8px);
	border-radius:20px;
	box-shadow:1px 1px 8px black;
	
	
}
 
.btn2{
	width:95px;
        padding: 7px;
        border: none;
        border-radius:10px;
        background-color:teal;
        color: #fff;
        cursor: pointer;
	position:relative;
	top:100px;
	right:50px;

}
.btn2:hover {
background: rgba(0,0,0,0);
	color: #3a7999;
	color:black;
	box-shadow: inset 0 0 0 3px  #3a7999 ;
	 
}
.lbl1,.lbl2{
	font-size:13px;
	position:relative;
	left:13px;
	font-weight:500;
	bottom:3px;

}


@import url(https://fonts.googleapis.com/css?family=Montserrat);

html, body{
  height: 100%;
  font-weight: 600;
  margin: 0;
  padding: 0;
}

body{
  //background: #030321;
  font-family: Arial;
}

.container {
  display: flex;
  
  height: 100%;
  align-items: center;
}

svg {
    display:block;
    font: 11.5em 'ADMIN';
    width: 150px;
    height: 70px;
letter-spacing:60px;
    margin: 0 auto;
}

.text-copy {
    fill: none;
    stroke: black;
    stroke-dasharray: 9% 25%;
    stroke-width: 10px;
    stroke-dashoffset: 0%;
    animation: stroke-offset 4.5s infinite linear;
}

.text-copy:nth-child(1){
  stroke:#00C5D7;
  animation-delay: -1;
}

.text-copy:nth-child(2){
  stroke: #0A0A0A;
  animation-delay: -2s;
}

.text-copy:nth-child(3){
  stroke:  #0A0A0A;
  animation-delay: -3s;
}

.text-copy:nth-child(4){
  stroke: #0A0A0A;
  animation-delay: -4s;
}

.text-copy:nth-child(5){
  stroke: #00C5D7;
  animation-delay: -5s;
}

@keyframes stroke-offset{
  100% {stroke-dashoffset: 35%;}
}
 
</style>
 
</head>
<body>
<div class="cont">
<div class="container">
  <svg viewBox="0 0 960 300">
    <symbol id="s-text">
      <text text-anchor="middle" x="50%" y="80%">ADMIN</text>
    </symbol>

    <g class = "g-ants">
      <use xlink:href="#s-text" class="text-copy"></use>
      <use xlink:href="#s-text" class="text-copy"></use>
      <use xlink:href="#s-text" class="text-copy"></use>
      <use xlink:href="#s-text" class="text-copy"></use>
      <use xlink:href="#s-text" class="text-copy"></use>
    </g>
  </svg>
</div>

	 
	 
    <form method="post" action="">
    <label class="lbl1">Username:</label><br>
    <input type="text" name="admin_username" id="text1" class="inp1" value=""><br>
    <label class="lbl2">Password:</label><br>
    <input type="password" name="admin_password" id="text2" class="inp2" value=""><br>
    <input type="submit" name="admin_submit" class="btn1" value="Admin Login">
	 <input type="submit" name="customer_submit" class="btn2" value="Customer">
	 
</form>
</div>
</body>
</html>