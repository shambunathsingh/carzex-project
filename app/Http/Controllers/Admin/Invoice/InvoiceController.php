<?php

namespace App\Http\Controllers\Admin\Invoice;

use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\Pdf;
use DateTime;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function generatePdf()
    {
        $date = new DateTime();
        $formattedDate = $date->format('F d, Y');
        $formattedTime = $date->format('h:i:s a');

        $inv = 'test';
        $data = [
            'title' => 'Carzex - Car Depot',
            'invoice' => $inv,
            'date' => $formattedDate,
            'time' => $formattedTime,
        ];

        $pdf = Pdf::loadView('generate-invoice-pdf', $data);
        return $pdf->download('invoice-INV-' . $inv . '.pdf');
    }
}
