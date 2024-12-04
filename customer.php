<?php
// Set the timezone to Indian Standard Time
date_default_timezone_set('Asia/Kolkata');

// Get the current date
$currentDate = date('Y-m-d');
?>		

<!DOCTYPE html>
<html>
<head>
    <title>Insert Data</title>
    <style>
       
        form {
            max-width: 400px;
            margin: 0 auto;
        }

        

         .inp1, .inp2, .inp3, .inp4
        {
            width: 200px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-sizing: border-box;
	position:relative;
	top:12px;
        }
 .inp1:hover{
	box-shadow:1px 1px 6px black;
}
 .inp2:hover{
	box-shadow:1px 1px 6px black;
}
 .inp3:hover{
	box-shadow:1px 1px 6px black;
}
 .inp4:hover{
	box-shadow:1px 1px 6px black;
}
	

        .btn{
            background-color: teal;
            color: white;
            padding: 10px 10px;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            margin-bottom: 10px;
            text-align: center;
	position: relative;
	bottom:28px;
	width:70px;
	right:35px;
	height:35px;
	 font-weight:bold;
        }

        input[type="submit"]:hover {
            background-color:black;
        }
	body{
	background-image:url("IMG32.jpg");
	background-size:cover;
	width:100%;
	height:100%;
}
h2{
	text-align:center;
	font-family:arial;
}
.cont{

	width:400px;
	height:400px;
	//border:1px solid black;
	display:flex;
	flex-direction:column;
	justify-content:center;
	align-items:center;
	position:relative;
	left:430px;
	
}
.lb{
position:relative;
top:10px;
}
 
.date{
	position:relative;
	top:3px;
	height:25px;
	text-align:center;
	border:none;
	border-radius:5px;
	 

}
.cont a{
	position:absolute;
	bottom:5px;
	left:80px;
	text-decoration:none;
	//border: 1px solid black;
	width:75px;
	height:25px;
	background-color:teal;
        color: #fff;
        padding-top:5px;
          
         border-radius: 50px;
         cursor: pointer;
        // margin-bottom: 10px;
         text-align:center;
	  
}
.cont a:hover{
	background-color:black;
}
 
 
    </style>
</head>
<body>
    <h2>CUSTOMER ENTRY</h2>


<div class="cont">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<label class="lb">Vehicle Number</label><br>
        <input type="text" class="inp1" name="vehicle_number"required><br><br>
	<label class="lb">Owner name</label><br>
        <input type="text" class="inp2" name="owner_name"required><br><br>
	<label class="lb">state:</label><br>
        <input type="text" class="inp3" name="state"required><br><br>
	<label class="lb">Product Name:</label><br>
        <input type="text" class="inp4" name="product_name"required><br><br>
        <br>
        <input type="date"  class="date"id="date" name="date" value="<?php echo $currentDate; ?>" readonly> <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="submit" name="submit"  class="btn" value="Submit">
        <br>
        <a href="login.php">Home</a>
    </form>
</div>

    <?php
    // Database credentials
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "my";

    
    $conn = new mysqli($servername, $username, $password, $dbname);

    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $vehicle_number = $_POST['vehicle_number'];
        $owner_name = $_POST['owner_name'];
        $state = $_POST['state'];
        $product_name = $_POST['product_name'];
        $cdate=$_POST['date'];
        

        
        $sql = "INSERT INTO customers (vehicle_number, owner_name, state, product_name,cdate) VALUES ('$vehicle_number', '$owner_name', '$state', '$product_name','$cdate')";

        if ($conn->query($sql) === TRUE) {
            echo "<script> alert('New record inserted successfully')</script>";
        } 
        else
         {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    $conn->close();
    ?>
</body>
</html>
