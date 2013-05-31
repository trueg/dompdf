<?php
/**
 * Simple page which converts the posted HTML data into pdf and returns that pdf.
 */

require_once("dompdf_config.inc.php");

$dompdf = new DOMPDF();

$dompdf->load_html(file_get_contents("php://input"));

$dompdf->render();

header('Content-Type: application/pdf');

echo $dompdf->output();

?>
