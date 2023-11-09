<?php

// if(!defined('ACCESSCHECK')){ //for security
//     die('DIRECT ACCESS NOT PERMITTED!'); 
// }
use mikehaertl\pdftk\Pdf;

class GeneratePDF
{

    public function generate_gen($data)
    {
        $filename = 'pdfgen_' . rand(2000, 1200000) . '.pdf';
        $pdf = new Pdf('./letter form.pdf');
        $pdf->fillForm($data)
            ->flatten()
            ->saveAs('./completed/' . $filename);
        return $filename;
    }

    public function generate_dl($data)
    {
        $filename = 'pdfdl_' . rand(2000, 1200000) . '.pdf';
        $pdf = new Pdf('./duty leave form.pdf');
        $pdf->fillForm($data)
            ->flatten()
            ->saveAs('./completed/' . $filename);
        return $filename;
    }

    public function generate_ll($data)
    {
        $filename = 'pdfll_' . rand(2000, 1200000) . '.pdf';
        $pdf = new Pdf('./leave letter form.pdf');
        $pdf->fillForm($data)
            ->flatten()
            ->saveAs('./completed/' . $filename);
        return $filename;
    }

    public function generate_bnf($data)
    {
        $filename = 'pdfbnf_' . rand(2000, 1200000) . '.pdf';
        $pdf = new Pdf('./bonafied form.pdf');
        $pdf->fillForm($data)
            ->flatten()
            ->saveAs('./completed/' . $filename);
        return $filename;
    }
}
