<?php
require('fpdf.php');

if (isset($_POST['download'])) {
    // Database connection
	$vehicle=$_POST['vehicle_number'];
    $conn = new mysqli('localhost', 'root', '', 'my');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT vehicle_number, owner_name, state, product_name, cdate, status, price FROM bill WHERE vehicle_number='$vehicle'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $pdf = new FPDF();
        $pdf->AddPage();

        // Set font
        $pdf->SetFont('Arial', 'B', 12);

        // Header
        $pdf->Cell(40, 10, 'Vehicle Number');
        $pdf->Cell(40, 10, 'Owner Name');
        $pdf->Cell(30, 10, 'State');
        $pdf->Cell(40, 10, 'Product Name');
        $pdf->Cell(30, 10, 'Creation Date');
        //$pdf->Cell(20, 10, 'Status');
        $pdf->Cell(20, 10, 'Price');
        $pdf->Ln();

        // Set font for data rows
        $pdf->SetFont('Arial', '', 12);
	
        while ($row = $result->fetch_assoc()) {
	
            $pdf->Cell(40, 10, $row['vehicle_number']);
            $pdf->Cell(40, 10, $row['owner_name']);
            $pdf->Cell(30, 10, $row['state']);
            $pdf->Cell(40, 10, $row['product_name']);
            $pdf->Cell(30, 10, $row['cdate']);
           // $pdf->Cell(20, 10, $row['status']);
            $pdf->Cell(20, 10, $row['price']);
            $pdf->Ln();
        }

        $pdf->Output('D', 'bill_records.pdf');
    } else {
        echo "No records found in the bill table.";
    }

    $conn->close();
}
?>