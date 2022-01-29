<?php
// reference the Dompdf namespace
require dirname(__DIR__) . '/vendor/autoload.php';

use Dompdf\Dompdf;

function create_pdf($html, $filename = '', $stream = false, $paper = 'A4', $orientation = 'portrait')
{
    // instantiate and use the dompdf class
    $dompdf = new Dompdf();

    $options = $dompdf->getOptions();
    $options->setDefaultFont('Courier');
    $options->setIsHtml5ParserEnabled(true);
    $dompdf->setOptions($options);

    $dompdf->loadHtml($html);
    // (Optional) Setup the paper size and orientation
    $dompdf->setPaper($paper, $orientation);
    // Render the HTML as PDF
    $dompdf->render();

    // Output the generated PDF to Browser / 0=Preview and 1=Download
    // $dompdf->stream("NADEMI", array("Atachment" => 0));
    // $dompdf->stream();
    // echo $dompdf->output();
    // echo base64_encode($dompdf->output());

    if ($stream) {
        $dompdf->stream($filename, array("Attachment" => false));
    } else {
        $file = dirname(__DIR__) . '/pdfs/' . $filename . '.pdf';
        file_put_contents($file, $dompdf->output());
        chmod(dirname(__DIR__) . '/pdfs/' . $filename . '.pdf', 0777);

        return 'http://' . $_SERVER['HTTP_HOST'] . '/My_FRAMEWORKS/SAP/pdfs/' . $filename . '.pdf';
    }
}
