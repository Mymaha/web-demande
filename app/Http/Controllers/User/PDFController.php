<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PDF;

class PDFController extends Controller
{
    public function generatePDF()
    {
        $pdf = PDF::loadView('pdf.demande');
  
        return $pdf->download('demande.pdf');
    }
}

