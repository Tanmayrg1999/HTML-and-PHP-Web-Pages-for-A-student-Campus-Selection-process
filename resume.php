<?php
require('fpdf.php');

$con=mysqli_connect('localhost','root','','hci');
$res=mysqli_query($con,"select * from details");
if(mysqli_num_rows($res)>0){
	
		while($row=mysqli_fetch_assoc($res)){
			$html='Name: ';
			$html.=$row['Name'];
			$html1='Aim: ';
			$html1.=$row['aim'];
			$html2='Date of Birth: ';			
			$html2.=$row['DoB'];
			$html3='Department: ';			
			$html3.=$row['Branch'];
			$html4='10th Percentage: ';			
			$html4.=$row['10th Percentage'];
			$html5='12th Percentage: ';			
			$html5.=$row['12th Percentage'];
			$html6='Aggregate CGPA: ';			
			$html6.=$row['Total CGPA'];
			$html7='Hobby: ';			
			$html7.=$row['hobby'];
			$html8='Skills: ';			
			$html8.=$row['skills'];
			$html9='Projects: ';			
			$html9.=$row['projects'];
			$html10='Internships: ';			
			$html10.=$row['internships'];
			$html11='Address: ';			
			$html11.=$row['Address'];
		}
}else{
	$html="Data not found";
}

$pdf=new FPDF();
$pdf->AddPage();
$pdf->Image('images/student.jpg',120,0,60,0);
$pdf->SetFont('Arial','B','10');
$pdf->SetTextColor(67,187,98);
$pdf->MultiCell(70,5,$html,1);
$pdf->MultiCell(70,5,$html2,1);
$pdf->MultiCell(70,5,$html3,1);
$pdf->MultiCell(70,5,$html4,1);
$pdf->MultiCell(70,5,$html5,1);
$pdf->MultiCell(70,5,$html6,1);
$pdf->MultiCell(0,5,$html1,1);
$pdf->MultiCell(0,5,$html7,1);
$pdf->MultiCell(0,5,$html8,1);
$pdf->MultiCell(0,5,$html9,1);
$pdf->MultiCell(0,5,$html10,1);
$pdf->MultiCell(0,5,$html11,1);

$pdf->Output('resume.pdf','I');

//D
//I
//F
//S
?>