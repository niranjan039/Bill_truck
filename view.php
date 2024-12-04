<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Customers</title>
   <style>

input[type="text"] {
        width: 150px;
        padding: 8px;
        margin-right: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
	color:black;
    }

    /* Button Styles */
    .btn1{
        
        color: white;
        padding: 10px 20px;
        border-radius: 4px;
        cursor: pointer;
	transition:0.6s linear ease-out;
	font-weight:bold;
	width:200px;
	height:50px;
	
    background-color:teal;
border:none;


    }
.btn2{

        
        color: white;
        padding: 10px 20px;
        border-radius: 4px;
        cursor: pointer;
	transition:0.6s linear ease-out;
	font-weight:bold;
	 width:200px;
	height:40px;
	
    background-color:teal;
border:none;

}
.btn3{

        
        color: white;
        padding: 10px 20px;
        border-radius: 4px;
        cursor: pointer;
	transition:0.6s linear ease-out;
	font-weight:bold;
	 width:150px;
	height:40px;
	
    background-color:teal;
border:none;


    
}
.btn4{

        
        color: white;
        padding: 10px 20px;
        border-radius: 4px;
        cursor: pointer;
	transition:0.6s linear ease-out;
	font-weight:bold;
	width:95px;
	height:40px;
	text-align:center;
	
    background-color:teal;
border:none;
position:relative;
bottom:1px;


    
}

    .btn1:hover {
       background-color:black;
	//color: #3a7999;
	color:white;
	//box-shadow: inset 0 0 0 3px  #3a7999;
	font-size:15px;
	
    }
.btn2:hover {
       background-color:black;
	//color: #3a7999;
	color:white;
	//box-shadow: inset 0 0 0 3px  #3a7999;
	font-size:11px;
	
    }
.btn3:hover {
       background-color:black;
	//color: #3a7999;
	color:white;
	//box-shadow: inset 0 0 0 3px  #3a7999;
	font-size:11px;
	
    }
.btn4:hover {
       background-color:black;
	//color: #3a7999;
	color:white;
	//box-shadow: inset 0 0 0 3px  #3a7999;
	font-size:11px;
	
    }


    




	* {
  box-sizing: border-box;
}
body {
  
  background: powderblue;
  color: white;
  
}
.table-container
{

display: flex;
justify-content: center;

}
table,th,td {
border: 1px solid black;
}
.center{
margin-left:auto;
margin-right:auto;
}
td
{
background-color:lightgray;
color:black;
}
th {
  background-color:teal;
  color:white;
	 
}
body{
	background-image:url("img6.jpg");
	background-size:cover;
	width:100%;
	height:100%
}

h1{
text-shadow:2px 2px 8px black;
}
a{
	box-border:20px;
}
.back a{
	position:absolute;
	bottom:3px;
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
 
    <form method="post"action="bill.php" align="center"><h1>Bill Section</h1><br>
        <button type="submit"name="edit" class="btn1">GENERATE BILL</button><br>
    </form>
</div>
<br>
<div class="back">
    <form method="post" align="center"><h1>CHECK STATUS</h1><br>
                <label for="vehicleNumber">Enter Vehicle Number:</label>
        <input type="text" id="vehicleNumber" name="vehicleNumber">
        <button type="submit" name="search" class="btn2">CHECK EXISTENCE</button>

         <input type="text" name="vehicle_number" id="vehicle_number">
        <button type="submit" name="check" class="btn3">TIME CHECKING</button>
        <button type="submit" name="check_loaded" class="btn4">STATUS</button><br>
 
<a href="admin.php">BACK</a>
</div>


    </form><br>
</div>
<form action="" align="center">
    <div id="customerInfo">
        <?php
        ini_set('display_errors', '0');
        // Check if form is submitted
        if(isset($_POST['search']))
         {

            // Retrieve data based on vehicle number
            $vehicleNumber = $_POST['vehicleNumber'];
            if(empty($vehicleNumber))
            {
            echo"<script>alert('please enter Vehicle Number')</script>";
        
            }
            else
            {
            // Connect to your database
            $servername = "localhost";
            $username = "root"; // Replace with your username
            $password = ""; // Replace with your password
            $dbname = "my"; // Replace with your database name

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT vehicle_number,owner_name, state, product_name,cdate FROM customers WHERE vehicle_number = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $vehicleNumber);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
		
                echo " <table class='center'>
                        <tr>
                            <th>vehicle_number</th>
                            <th>Owner Name</th>
                            <th>State</th>
                            <th>Product Name</th>
                            <th>Date</th>
                        </tr>";
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>".$row["vehicle_number"]."</td>
                            <td>".$row["owner_name"]."</td>
                            <td>".$row["state"]."</td>
                            <td>".$row["product_name"]."</td>
                            <td>".$row["cdate"]."</td>
                          </tr>";
                }
                echo "</table>";
		
            } 
            else {
                echo "No results found";
            }
            $conn->close();
        }
        }
        elseif(isset($_POST['check']))
        {
        $vehicleNumber = $_POST['vehicle_number'];
            if(empty($vehicleNumber))
            {
            echo"<script>alert('please enter Vehicle Number To Check')</script>";
        
}
else           
{

    // Connect to your database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$vehicleNumber = $_POST['vehicle_number'];

$sql = "SELECT cdate from customers where vehicle_number='$vehicleNumber'";
$result = $conn->query($sql);
  
   if ($result->num_rows > 0) 
   {  
    $row = $result->fetch_assoc();
    $cdate = $row["cdate"];
    
        $current_time =date("Y-m-d");

        $timestamp1 = strtotime($cdate);
$timestamp2 = strtotime($current_time);

// Calculate the difference in seconds
$diff_seconds = abs($timestamp2 - $timestamp1);

// Convert seconds to days
$diff_days = floor($diff_seconds / (60 * 60 * 24));


        
        
        if ($diff_days > 1) 
	{
		echo "<br><script>alert('Difference in days: $diff_days  $cdate');</script>";
          	  echo "<br><script>alert('Record from " . $row['cdate'] . " is greater than 24 hours');</script><br>";
        } 
        else
         {
		echo "<br><script>alert('Difference in days: $diff_days days $cdate is not greater than 24 hours');</script><br>";
            echo "<br><script>alert('Record from " . $row['cdate'] . " is not greater than 24 hours');<br> </center>";
        }
}
else
{
    echo"<script>alert('no result');</script>";
}
}
$conn->close();
}
if(isset($_POST['check_loaded']))
{

    $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "my";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM customers WHERE status='loaded'";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                echo "<table align='center'>
                        <tr bgcolor='white'>
                            <th bgcolor='white'>VEHICLE NUMBER</th>
                            <th>OWNER NAME</th>
                            <th>STATE</th>
                            <th>PRODUCT NAME</th>
                            <th>DATE</th>
                            <th>STATUS</th>
                        </tr>";
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>".$row["vehicle_number"]."</td>
                            <td>".$row["owner_name"]."</td>
                            <td>".$row["state"]."</td>
                            <td>".$row["product_name"]."</td>
                            <td>".$row["cdate"]."</td>
                            <td>".$row["status"]."</td>
                          </tr>";
                }
                
                echo "</table>";
            } 
            else {
                echo "No results found";
            }
            $conn->close();
        }

        
        ?>
    </div>
</form>
</body>
</html>

