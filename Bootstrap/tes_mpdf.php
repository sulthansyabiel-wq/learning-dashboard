<?php
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML("<h1>Hello World dari mPDF</h1><p>Kalau muncul PDF ini berarti mPDF sudah jalan ✅</p>");
$mpdf->Output("tes.pdf","I");
