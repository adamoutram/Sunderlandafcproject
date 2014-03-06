<?php
session_start();

// Check if authenticated user
//if not re-direct to login page
if (!isset($_SESSION["authenticatedUser"]))
{
$_SESSION["message"] = "Please Login";
	header("Location: index.php");
}
else
{ 
//If authenticated then display page contents
?>
<?php //// Create connection
			$con = mysqli_connect("adamoutramleedsmet.co.uk.mysql", "adamoutramleeds", "1Rebeccaleeks", "adamoutramleeds");
			
			// Check connection
			if (mysqli_connect_errno($con)) {
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
			$username = $_SESSION["authenticatedUser"];
			$query = "SELECT * FROM SAFCusers WHERE username='$username'" or die(mysqli_error());
			
			$result = mysqli_query($con, $query);
		
			while($rows=mysqli_fetch_array($result)){
				
				$firstname= $rows['firstname'];
				$surname= $rows['surname'];
				$DOB= $rows['DOB'];
				$email= $rows['email'];
				$addressL1= $rows['addressL1'];
				$addressL2= $rows['addressL2'];
				$city= $rows['city'];
				$postcode= $rows['postcode'];
				$telephone= $rows['telephone'];
				$userimage= $rows['userimage'];

require('fpdf.php');

class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('images/sunderlandafc-logo.png',10,6,30);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(30,10,'Personal Data held by Sunderland Fan Site Ltd',10,0,'C');
    // Line break
    $this->Ln(20);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

$pdf->Cell(1,40, "Username: '$username'");
$pdf->Cell(1,60, "Firstname: '$firstname'");
$pdf->Cell(1,80, "Surname: '$firstname'");
$pdf->Cell(1,100, "Date of Birth: '$DOB'");
$pdf->Cell(1,120, "Email: '$email'");
$pdf->Cell(1,140, "Address: '$addressL1'");
$pdf->Cell(1,160, "Address: '$addressL2'");
$pdf->Cell(1,180, "City: '$city'");
$pdf->Cell(1,200, "Postcode: '$postcode'");
$pdf->Cell(1,220, "Telephone: '$telephone'");
$pdf->Image("uploads/$userimage",130,40,60);
$pdf->Cell(0,240, 'Thank You on behalf of SAFC Fan Site Ltd for your continued support');
$pdf->Output();

?>

	




<?php
}}
?>