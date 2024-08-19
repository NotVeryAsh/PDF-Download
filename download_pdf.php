<?php
    // TODO filename dynamic
    // TODO Generate from dompdf
    // TODO Temporarily save file and delete after downloading
    $file = "test.pdf";
    header("Content-Type: application/pdf");
    header('Content-Disposition: attachment; filename="' . basename($file) . '"');
    readfile($file);
