<?php
require 'vendor/autoload.php';

use Dompdf\Dompdf;

// Instantiate Dompdf
$dompdf = new Dompdf();

// Load HTML content
$dompdf->loadHtml('Hello world');

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to the browser
$dompdf->stream();
