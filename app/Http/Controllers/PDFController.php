<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PDF; 

class PDFController extends Controller
{
    public function download($id)
    {
        $pdf = PDF::findOrFail($id);

        // Descargar el archivo PDF
        return response()->download(public_path('storage/' . $pdf->file_path));
    }
}
