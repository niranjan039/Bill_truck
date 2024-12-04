<html>
<head>
<style>
/*h1{
	text-align:center;
	font-family:arial;
	-webkit-text-stroke:1px black;
	font-size:60px;
	//background-color:#305C7B;
	color:black;
}*/
*{
	margin:0;
	padding:0;
	box-sizing:border-box;
}
.lbl{
	position:relative;
	left:500px;
	bottom:500px;
	color:white;
	text-shadow:2px;
	font-size:30px;
	 
	
}
.btn1{
	border-radius:20px;
	width:200px;
	height:40px;
	position:relative;
	left:280px;
	bottom:400px;
	background-color:#E0C7A9;
	color:black;
	border:none;
	box-shadow:2px 2px 6px black;

	
	
	 
}
.btn1:hover{
	font-size:15px;
	background-color:black;
	color:white;
	 	 
}
.btn2:hover{
	font-size:15px;
	background-color:black;
	color:white;	 
}
.btn2{
	border-radius:20px;
	width:200px;
	height:40px;
	position:relative;
	left:545px;
	bottom:350px;
	background-color:#E0C7A9;
	color:black;
	border:none;
	box-shadow:2px 2px 6px black;

	
	 
}
 

 	
 
 body{
	background-image:url("IMG21.jpg");
	 
	background-size:cover;
	width:100%;
	height:100%;
	}
body {
   background-color:white;
   margin:0;
}

.patterns {
	position:relative;
bottom:310px;
right:180px;
  height: 100vh;

}



svg text {
  font-family: Lora;
  letter-spacing: 1px;
  stroke:black;
  font-size: 50px;
  font-weight: 100;
  stroke-width: 3;
 
  animation: textAnimate 5s  infinite alternate;
  
}

@keyframes textAnimate {
  0% {
    stroke-dasharray: 0 100%;
    stroke-dashoffset:  10%;
    fill:hsl(200, 5%, 95%)

  }
  
  100% {
    stroke-dasharray: 10% 0;
    stroke-dashoffstet: -10%;
    fill: hsla(189, 68%, 75%,0%)
  }
  
}
.back a{
position:absolute;
	bottom:10px;
	left:1100px;
	text-decoration:none;
	border: 1px solid black;
	width:75px;
	height:30px;
	background-color:teal;
        color:white;
        padding-top:5px;
          
         border-radius: 50px;
         //cursor: pointer;
        // margin-bottom: 10px;
         text-align:center;
	
}




 
 
 
 
</style>
</head>
 

 
  <body>
  <div class="patterns">
  <svg width="100%" height="100%">
              
    <rect x="10" y="10" width="100%" height="100%" fill="url(#polka-dots)"> </rect>
     
    
   
 <text x="50%" y="60%"     >
   WELCOME ADMIN
 </text>
 </svg>
</div>
 
</body>
<body>
   
    <form method="post"action="view.php">
 	<label class="lbl">VEHICLE DETAILS</label>
    <input type="submit"  class="btn1" name="submit"value="GO TO BILL GENERATION">
   
	
</form>	
 <div class="back">
<form method="post" action="">
<input type="submit" class="btn2" name="new" value="NEW ENTRY">	
<a href="login.php">back</a>
</form> 
</div>

</body>
</html>

<?php
if(isset($_POST['new']))
{
header("Location:customer.php");
}
?>