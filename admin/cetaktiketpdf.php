<?php
ob_start();
 include('cetaktiket.php');
	 $content = ob_get_clean();
	 
	// conversion HTML => PDF
	 require_once('../pdf/html2pdf.class.php');
	 try
	 {
	 $html2pdf = new HTML2PDF('L','A5', 'fr', false, 'ISO-8859-15',array(23,5,20,0));
	// $html2pdf->pdf->SetDisplayMode('100');
	$html2pdf->pdf->SetDisplayMode(75);
 $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
	 $html2pdf->Output('msf.pdf');
	 }
	 catch(HTML2PDF_exception $e) { echo $e; }
?>	 