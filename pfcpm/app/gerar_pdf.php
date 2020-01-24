<?php

    require_once('./lib/pdf/mpdf.php');

    $mpdf = new mPDF('c', 'A4');
    $mpdf->writeHTML('<div>Olá Mundo!!!</div>');
    $mpdf->output('reporte.pdf', 'I');
?>