<?php

namespace App\Http\Controllers;
use App\Models\Slider;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use App;
use Dompdf\Dompdf;
use PDF;


use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $slider = Slider::paginate(8);
         return view('reportSlider', compact('slider'));
    }



   public function generateReport(Request $request)
{
    $month = $request->input('month'); // get the selected month from the form
    $sliders = Slider::where('ay', $month)->get(); // retrieve the rows filtered by month
    $pdf = PDF::loadView('pdf.report', ['sliders' => $sliders]); // create a new instance of PDF and load the 'report' view with the filtered rows
    return $pdf->stream(); // generate and stream the PDF report to the browser
}



}
