<?php
require_once('../vendor/autoload.php');

use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Html2Pdf;

// Initialize Html2Pdf
$html2pdf = new Html2Pdf('L', 'A4', 'fr');

// Load the HTML template
$templatePath = __DIR__ . '/assets/template_spipu.html';
$htmlContent = file_get_contents($templatePath);

// Generate the PDF
$html2pdf->writeHTML($htmlContent);
try {
    $html2pdf->output('template_spipu.pdf');
} catch (Html2PdfException $e) {
    dd($e);
}
