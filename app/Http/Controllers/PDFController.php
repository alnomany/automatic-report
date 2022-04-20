<?php

namespace App\Http\Controllers;

//use Barryvdh\DomPDF\Facade as PDF;
//use Dompdf\Dompdf;
use Illuminate\Http\Request;
//use PDF;
//use Elibyy\TCPDF\Facades\TCPDF;
use Illuminate\Support\Facades\App;
use Mpdf\Mpdf;
//use niklasravnsborg\LaravelPdf\Facades\Pdf as PDF;
//use TCPDF_FONTS;
use Barryvdh\Snappy\Facades\SnappyPdf as PDF;

set_time_limit(300);

class PDFController extends Controller
{
    public function index()
    {

        $posts = 3;

        $pdf = PDF::loadView('news-html-pdf', ['posts' => $posts])
            ->setPaper('a4', 'landscape');
        //    ->setOption('header-html')
        //    ->setWarnings(false);
       	// $pdf->setOption('footer-html', view('layouts.footer'));
       	// return $pdf->inline();
            // dd($pdf);
        return $pdf->stream();

    }
    public function chartjs(){
        $pdf = PDF::loadView('frontend.chartjs')

   ->setOption('enable-javascript',true)
   ->setOption('images', true)
   ->setOption('javascript-delay',20000)
    ->setOption('enable-smart-shrinking',true)
   ->setOption('no-stop-slow-scripts',true)

  ;
return $pdf->stream();
}
}
