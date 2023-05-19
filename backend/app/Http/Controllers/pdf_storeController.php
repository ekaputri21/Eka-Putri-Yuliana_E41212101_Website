<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pdf_storeController extends Controller
{
    public function pdf_upload()
    {
        return view('pdf_upload');
    }

    public function pdf_store(Request $request)
    {
        $pdf = $request->file('file');

        $pdfName = 'pdf_'.time().'.'.$pdf->extension();
        $pdf->move(public_path('pdf/dropzone'), $pdfName);
        return response()->json(['success' => $pdfName]);
    }
}
