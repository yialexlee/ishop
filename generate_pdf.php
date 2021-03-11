<?php
include_once('dbconfig.php');
include_once('libs/fpdf.php');
if(isset($_GET["view"]))
$tid = $_GET["tid"];
$sql = "Select * from ((orderdetail inner join product on orderdetail.Product_ID = product.Product_ID)inner join member on orderdetail.Member_ID = member.id) where orderdetail.Order_ID = '$tid'";
$result = mysqli_query($connect,$sql);
$row = mysqli_fetch_array($result);
$pdf=new FPDF('L','mm','A4');
$pdf->AddPage();
$pdf -> Image('assets/images/demos-img/logo.png');
$pdf->Cell(189	,5,'',0,1);
$pdf->SetFont('Arial','B',18);
$pdf->Cell(71	,5,'Ishop Computer Accessories',0,0);
$pdf->Cell(59	,5,'',0,0);
$pdf->Cell(59	,5,'Payment Reciept',0,1);
$pdf->Cell(59	,5,'',0,1);
$pdf->SetFont('Arial','',12);
$pdf->Cell(130	,5,'Jalan Ayer Keroh Lama,',0,0);
$pdf->Cell(59	,5,'',0,1);
$pdf->Cell(130	,5,'75450 Bukit Beruang,Melaka, Malaysia.',0,0);
$pdf->Cell(25	,5,'Date          :',0,0);
$pdf->Cell(34	,5,$row["Order_DATE"],0,1);
$pdf->Cell(130	,5,'Phone : +07-123 4567',0,0);
$pdf->Cell(25	,5,'Order ID : ',0,0);
$pdf->Cell(34	,5,'[ '.$row["Order_ID"].' ]',0,1);
$pdf->Cell(130	,5,'Email : ishopofficialemail@gmail.com',0,0);
$pdf->Cell(35	,5,'Credit Card Bank : ',0,0);
$pdf->Cell(34	,5,$row["Order_CARDBANK"],0,1);
$pdf->Cell(130	,5,'',0,0);
$pdf->Cell(34	,5,'',0,1);
$pdf->Cell(34	,5,'',0,1);
$pdf->SetFont('Arial','B',15);
$pdf->Cell(100	,5,'Recipient Details : ',0,1);//end of line
$pdf->Cell(59	,5,'',0,1);//end of line
$pdf->SetFont('Arial','',12);
$pdf->Cell(130	,5,'Name : '.$row["Order_RECIPIENT"],0,1);
$pdf->Cell(130	,5,'Contact No. : '.$row["Order_PHONE"],0,1);
$pdf->Cell(25	,5,'Address : '.$row["Order_ADDRESS"],0,0);
$pdf->Cell(189	,10,'',0,1);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(10	,5,'No',1,0,'C');
$pdf->Cell(150	,5,'Product Name',1,0,'C');
$pdf->Cell(40	,5,'Product Price',1,0,'C');
$pdf->Cell(40	,5,'Product Quantity',1,0,'C');
$pdf->Cell(40	,5,'Total Price',1,1,'C');
$pdf->SetFont('Arial','',12);
$result = mysqli_query($connect,$sql);
$num = 0;
$proPrice   = 0.0;
$total      = 0.0;
$totalQTY =0;
while($row = mysqli_fetch_assoc($result))
{
	$num++;
	$p = $row["Product_PRICE"];
	$q = $row["Product_QTY"];
	$totalQTY +=$q;
	$totalprice = $p * $q;
	$total+=$totalprice;
$pdf->Cell(10	,7,$num,1,0,'C');	
$pdf->Cell(150	,7,$row["Product_NAME"],1,0,'L');
$pdf->Cell(40	,7,'RM '.$row["Product_PRICE"],1,0,'C');
$pdf->Cell(40	,7,$row["Product_QTY"],1,0,'C');
$pdf->Cell(40	,7,'RM '.number_format($totalprice,2),1,1,'C');}
$pdf->Cell(10	,7,'',1,0,'C');
$pdf->Cell(150	,7,'',1,0,'C');
$pdf->Cell(40	,7,'',1,0,'C');
$pdf->Cell(40	,7,'',1,0,'C');
$pdf->Cell(40	,7,'RM '.number_format($total,2),1,1,'C');
$pdf->Cell(189	,10,'',0,1);
$pdf->Cell(189	,10,'',0,1);
$pdf->SetFont('Arial','B',17);
$pdf->Cell(130	,5,'Terms and Conditions',0,1);
$pdf->Cell(130	,5,'',0,1);
$pdf->SetFont('Arial','',12);
$pdf->Cell(130	,5,'1. You are advised to print out this payment invoice to speed up the check-in process.',0,1);
$pdf->Cell(130	,5,'2. No refund will be allowed for product that already purchased.',0,1);
$pdf->Cell(130	,5,'3. Make sure the parcel that received is same with product in this receipt.',0,1);
$pdf->Cell(130	,5,'4. Any required or help, pls contact us on +07-123 4567 or email us at ishopofficialemail@gmail.com.',0,1);
$pdf->Output();
?>