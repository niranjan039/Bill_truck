<!DOCTYPE html>
<html>
<head>
    <title>Bill Generation</title>
<style>
 body{
	background-image:url("IMG23.jpg");
	 
	background-size:cover;
	width:50%;
	height:100%;
	position:relative;
	top:40px;
	}
 
.btn{
	position:relative;
	left:510px;
	bottom:50px;
	width:100px;
	height:35px;
	border-radius:10px;
	box-shadow:2px 2px 6px black;
	background-color:#280202;
	color:white;
	font-weight:bold;
	
}

.btn:hover{
background-color:#A8BEC7;
color:black;

	
	 
}
 
.inp1{
        position:relative;
	bottom:50px;
	left:500px; 
	width:200px;
	height:30px;
	border-radius:20px;
	box-shadow:2px 2px 6px black;

}
.animate-charcter
{
	position:relative;
	left:450px;
	bottom:50px;
   text-transform: uppercase;
  background-image: linear-gradient(
    -225deg,
    #181718 0%,
    #434247 29%,
     #9D9C9E 67%,
    #F7F9FA 100%
  );
  background-size:50px;
  background-clip:50px;
  background-size:200% auto;
  color:black;
  background-clip: text;
  text-fill-color: transparent;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: textclip 2s linear infinite;
  display: inline-block;
    font-size:50px;

}
@keyframes textclip {
  to {
    background-position: 200% center;
  }
}
 
 
.cont{
	position:relative;
	left:300px;
	text-align:center;
	//border:2px solid black;
	margin:center;
	width:600px;
	height:500px;
	margin-top:20px;
	 
	 
}
.inp{
	border-radius:1px;
	display:inline-block;
	display:flex;
	flex-direction:row;
	position:relative;
	left:330px;
	width:150px;
	height:25px;
	 
	margin-top:1px;
	bottom:20px;
	box-shadow:1px solid black;
	 

}
.inp:hover{
	box-shadow:5px solid black;
	 background-color:#A8BEC7;
}
.cont label{
	text-shadow:1px 1px black;
	color:white;
	position:relative;
	left:170px;
	display:flex;
	flex-direction:row;
	font-weight:bold;
	
}
h2{
	position:relative;
	left:500px;
	bottom:30px;
}
.bt{
	width:100px;
	height:30px;
	border-radius:10px;
	 background-color:#280202;
	font-weight:bold;
	color:white;
	position:relative;
	bottom:20px;
	left:130px;
}
.bt:hover{
	  background-color:#A8BEC7;
color:black
}
.back a{
position:absolute;
	bottom:300px;
	left:1000px;
	text-decoration:none;
	border: 1px solid black;
	width:75px;
	height:25px;
	background-color:#280202 ;
        color:white;
        padding-top:5px;
          
         border-radius: 30px;
         //cursor: pointer;
        // margin-bottom: 10px;
         text-align:center;
	box-shadow:5px solid black;
}
table,th,td {
 
position:relative;
left:170px;
}
.center{
margin-left:auto;
margin-right:auto;
}
.dld
{
	width:100px;
	height:30px;
	border-radius:20px;
	background-color:teal;
	position:relative;
	bottom:50px;
	left:1000px;

	
}
a{
	position:relative;
	left:900px;
	 text-decoration:none;
	border: 1px solid black;
	 border-width:10px;
	width:20px;
	height:30px;
	background-color:black;
        color:#fff;
        padding-top:5px;
          
         border-radius: 50px;
         cursor: pointer;
        // margin-bottom: 10px;
         text-align:center;
	 
}
 
  </style>

</head>
<body>
    <div class="container">
  <div class="row">
    <div class="col-md-12 text-center">
      <h3 class="animate-charcter">GENERATE BILL</h3>
    </div>
  </div>
<div class="back">
    <form action="bill.php" method="POST">
        
        <input type="text" class="inp1"id="vehicle_number" name="vehicle_number"  placeholder="  VEHICLE NUMBER"required>
        <input type="submit"class="btn" name="search" value="SEARCH">
	 
    </form></div>
 

    <?php
    if (isset($_POST['search'])) {
        $vehicle_number = $_POST['vehicle_number'];

    
        $conn = new mysqli('localhost', 'root', '', 'my');

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $q="SELECT * from customers where vehicle_number='$vehicle_number' and status='loaded'";
        $r=$conn->query($q);
        if($r->num_rows > 0)
        {
        $sql = "SELECT vehicle_number, owner_name, state, product_name, cdate, status FROM customers WHERE vehicle_number = ? and status='loaded'";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('s', $vehicle_number);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $customer = $result->fetch_assoc();
            ?>
            <h2>CUSTOMER DETAILS</h2>
	<div class="cont">
            <form action="bill.php" method="POST">
                <label for="vehicle_number">VEHICLE NUMBER:</label>
                <input type="text"class="inp" id="vehicle_number" name="vehicle_number" value="<?php echo $customer['vehicle_number']; ?>" readonly><br>
                <label for="owner_name">OWNER NAME:</label>
                <input type="text" class="inp" id="owner_name" name="owner_name" value="<?php echo $customer['owner_name']; ?>" readonly><br>
                <label for="state">STATE:</label>
                <input type="text" class="inp" id="state" name="state" value="<?php echo $customer['state']; ?>" readonly><br>
                <label for="product_name">PRODUCT NAME:</label>
                <input type="text" class="inp" id="product_name" name="product_name" value="<?php echo $customer['product_name']; ?>" readonly><br>
                <label for="cdate">DATE:</label>
                <input type="text" class="inp" id="cdate" name="cdate" value="<?php echo $customer['cdate']; ?>" readonly><br>
                <label for="status">STATUS:</label>
                <input type="text"  class="inp" id="status" name="status" value="<?php echo $customer['status']; ?>" readonly><br>
                <label for="price">PRICE:</label>
                <input type="text"  class="inp" id="price" name="price" required><br>
                <input type="submit"  class ="bt"name="submit_bill" value="SUBMIT">
            </form>
	</div>
            <?php
        } else {
            echo "No customer found with the given vehicle number.";
        }

        $stmt->close();
        $conn->close();
    }
    else
    {
        echo"<script>alert('already unloaded');</script>";
    }

    }

    if (isset($_POST['submit_bill'])) 
    {
       	$vehicle_number = $_POST['vehicle_number'];
        $owner_name = $_POST['owner_name'];
        $state = $_POST['state'];
        $product_name = $_POST['product_name'];
        $cdate = $_POST['cdate'];
        $status = $_POST['status'];
        $price = $_POST['price'];
	global $vehicle_number;

        // Database connection
        $conn = new mysqli('localhost', 'root', '', 'my');

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO bill (vehicle_number, owner_name, state, product_name, cdate, status, price) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('sssssss', $vehicle_number, $owner_name, $state, $product_name, $cdate, $status, $price);

        if ($stmt->execute()) 
        {
            $qr="UPDATE customers set status='unloaded' where vehicle_number='$vehicle_number'";
            $conn->query($qr);
            echo "<script>alert('Bill generated successfully');</script>";
             $stmt->close();
            $conn->close();

            $con = new mysqli('localhost', 'root', '', 'my');

                 if ($con->connect_error)
                {
                        die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT * FROM bill where vehicle_number='$vehicle_number' and status='loaded' ";
                $result = $con->query($sql);

                if ($result->num_rows > 0) 
                {
                        echo "<h2>BILL RECORDS</h2>";
                        echo '<table class="tbl" align="center">
                        <tr bgcolor="lightgray">
                        <th >Vehicle Number</th>
                        <th>Owner Name</th>
                        <th>State</th>
                        <th>Product Name</th>
                        <th>Creation Date</th>
                        <th>Status</th>
                        <th>Price</th>
                        </tr>';
                        while ($row = $result->fetch_assoc())
                        {
                              echo "<tr bgcolor='white'>
                                <td>{$row['vehicle_number']}</td>
                                <td>{$row['owner_name']}</td>
                                <td>{$row['state']}</td>
                                <td>{$row['product_name']}</td>
                                <td>{$row['cdate']}</td>
                                <td>{$row['status']}</td>
                                <td>{$row['price']}</td>
                                </tr>";
                        }
                    echo "</table>";
			$vehicle_number=$_POST['vehicle_number'];
			?>
		 
                    <form action="download.php" method="post">
			<input type="hidden" name="vehicle_number" value="<?php echo $vehicle_number; ?>">
                    <input type="submit" name="download" class="dld" value="Download Bill">
			<a href="view.php">back</a>

                    </form>
		<?php
                }
                else
                {
                    echo "No records found in the bill table.";
                }

                $con->close();

        }
         else 
        {
            echo "Error: " . $stmt->error;
        }
    }
    ?>
 
</body>
</html>
