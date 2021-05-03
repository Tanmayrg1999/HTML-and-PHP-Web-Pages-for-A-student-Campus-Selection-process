<?php
require('fpdf.php');

$con=mysqli_connect('localhost','root','tanmay1999','hci');
$res=mysqli_query($con,"select * from details");
if(mysqli_num_rows($res)>0){
		while($row=mysqli_fetch_assoc($res)){
			$hl=$row['Name'];
			$hl5=$row['Branch'];
			$html='Name: ';
			$html05=$row['Name'];
			$html1='CAREER OBJECTIVE : ';
			$html15=$row['aim'];
			$html2='PERSONAL DETAILS : ';			
			$html25='Date Of Birth            = ';	
			$html25.=$row['DoB'];	
			$html115='Address                    = ';			
			$html115.=$row['Address'];	
			$html145='Contact Number      = ';			
			$html145.=$row['Contact'];
			$html3='Department: ';			
			$html35=$row['Branch'];
			$html4='EDUCATION DETAILS ';
			$html45='HSC Percentage = ';			
			$html45.=$row['10Per'];
			$html55='SSC Percentage = ';			
			$html55.=$row['12Per'];
			$html6='Aggregate CGPA: ';			
			$html65=$row['cgpa'];
			$html65.=' / 10';
			$html7='HOBBY : ';			
			$html75=$row['hobby'];
			$html8='KEY SKILLS : ';			
			$html85=$row['skills'];
			$html9='PROJECTS : ';			
			$html95=$row['projects'];
			$html10='INTERNSHIPS : ';			
			$html105=$row['internships'];
		}
}else{
	$html="Data not found";
}

$pdf=new FPDF();
$pdf->AddPage();
$pdf->ln();
$pdf->ln();$pdf->SetTextColor(0,0,0);
$pdf->SetFillColor(255,255,255);

$pdf->SetFont('Helvetica','B',12);
$pdf->SetTextColor(0,139,139);
$pdf->MultiCell(0,5,$hl,0,'R',true);
$pdf->SetTextColor(0,0,0);
$pdf->MultiCell(0,5,$hl5,0,'R',true);
$pdf->ln();
$pdf->ln();
$pdf->ln();
$pdf->Image('images/MIT.png',10,10,60,0);

$pdf->ln();
$pdf->SetFont('Helvetica','B',12);
$pdf->SetFillColor(0,139,139);
$pdf->SetTextColor(255,255,255);


$pdf->SetFont('Helvetica','B',12);
$pdf->SetTextColor(255,255,255);
$pdf->SetFillColor(0,139,139);
$pdf->MultiCell(0,10,$html1,0,'L',true);
$pdf->SetFillColor(255,255,255); //                  --------------  Career Objective
$pdf->SetFont('Helvetica','B',10);
$pdf->SetTextColor(0,0,0);
$pdf->MultiCell(0,5,$html15,0);
$pdf->ln();

// ------------------------------------------------------------------------------------------------

$pdf->SetFont('Helvetica','B',12);
$pdf->SetTextColor(255,255,255);
$pdf->SetFillColor(0,139,139);
$pdf->MultiCell(0,10,$html8,0,'L',true);
$pdf->SetFillColor(255,255,255);//                   ----------------  Skills
$pdf->SetFont('Helvetica','B',10);
$pdf->SetTextColor(0,0,0);
$pdf->MultiCell(0,5,$html85,0);
$pdf->ln();

//--------------------------------------------------------------------------------------------------

$pdf->SetFont('Helvetica','B',12);
$pdf->SetTextColor(255,255,255);
$pdf->SetFillColor(0,139,139);
$pdf->MultiCell(0,10,$html4,0,'L',true);
$pdf->SetFillColor(255,255,255);//                              -----------------Education Details
$pdf->SetFont('Helvetica','B',10);
$pdf->SetTextColor(0,0,0);
$pdf->MultiCell(0,5,$html45,0);
$pdf->MultiCell(0,5,$html55,0);
$pdf->ln();

//-------------------------------------------------------------------------------------------------

$pdf->SetFont('Helvetica','B',12);
$pdf->SetTextColor(255,255,255);
$pdf->SetFillColor(0,139,139);
$pdf->MultiCell(0,10,$html6,0,'L',true);
$pdf->SetFillColor(255,255,255);//                              -----------------CGPA
$pdf->SetFont('Helvetica','B',10);
$pdf->SetTextColor(0,0,0);
$pdf->MultiCell(0,5,$html65,0);
$pdf->ln();

//---------------------------------------------------------------------------------------------

$pdf->SetFont('Helvetica','B',12);
$pdf->SetTextColor(255,255,255);
$pdf->SetFillColor(0,139,139);
$pdf->MultiCell(0,10,$html10,0,'L',true);
$pdf->SetFillColor(255,255,255);//                              ------------------ Internships
$pdf->SetFont('Helvetica','B',10);
$pdf->SetTextColor(0,0,0);
$pdf->MultiCell(0,5,$html105,0);
$pdf->ln();

//---------------------------------------------------------------------------------------------

$pdf->SetFont('Helvetica','B',12);
$pdf->SetTextColor(255,255,255);
$pdf->SetFillColor(0,139,139);
$pdf->MultiCell(0,10,$html9,0,'L',true);
$pdf->SetFillColor(255,255,255);//                            --------------------- Projects
$pdf->SetFont('Helvetica','B',10);
$pdf->SetTextColor(0,0,0);
$pdf->MultiCell(0,5,$html95,0);
$pdf->ln();

//---------------------------------------------------------------------------------------------

$pdf->SetFont('Helvetica','B',12);
$pdf->SetTextColor(255,255,255);
$pdf->SetFillColor(0,139,139);
$pdf->MultiCell(0,10,$html7,0,'L',true);
$pdf->SetFillColor(255,255,255);//                        -----------------------  Hobbies
$pdf->SetFont('Helvetica','B',10);
$pdf->SetTextColor(0,0,0);
$pdf->MultiCell(0,5,$html75,0);
$pdf->ln();

 //-------------------------------------------------------------------------------------------------

$pdf->SetFont('Helvetica','B',12);
$pdf->SetTextColor(255,255,255);
$pdf->SetFillColor(0,139,139);
$pdf->MultiCell(00,10,$html2,0,'L',true);
$pdf->SetFillColor(255,255,255);//                 -------------------  Date of Birth
$pdf->SetFont('Helvetica','B',10);
$pdf->SetTextColor(0,0,0);
$pdf->MultiCell(0,5,$html25,0);
$pdf->MultiCell(0,5,$html115,0);
$pdf->MultiCell(0,5,$html145,0);
$pdf->ln();



//---------------------------------------------------------------------------------------------

$pdf->Output('resume.pdf','I');

//D
//I
//F
//S
?>