<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Article;

class PdfController extends Controller
{
    public function test(){

        $data = "";
        $pdf = PDF::loadView('pdf.test', compact('data'));
        return $pdf->download('test.pdf');
    }
}
