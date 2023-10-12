<?php

require_once('include/TCPDF/tcpdf_import.php');
// require_once('..');

/*----------------- Variable INIT-------------------*/

// $name = $_POST['name'];
$u_mail = "tony0940419@gmail.com";
// $u_mail = $_POST['email'];
$html = <<<EOF
<table>
<tr>
	<td>$u_mail</td>
</tr>
</table>
EOF;

/*---------------- Sent Mail Start -----------------*/

mail($u_mail, "[IMPORTANT] AN ORDER HAS BEEN SET UP", $html);



/*---------------- Print PDF Start -----------------*/
// $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
// $pdf->setPrintHeader(false);
// $pdf->setPrintFooter(false);
// $pdf->SetFont('cid0jp','', 18); 
// $pdf->AddPage();

// $pdf->writeHTML($html);
// $pdf->lastPage();
// $pdf->Output('order.pdf', 'I');
?>