<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Dompdf\Dompdf;
use PDF;




class SliderController extends Controller
{
    public function index()
    {
         
         $slider = Slider::paginate(8);
         return view('slider', compact('slider'));

    }

    public function newSlider()
    {
        
        return view('createSlider');
    }
    public function store(Request $request)
    {
        $save = new Slider;
        $save->Urun = $request->Urun;
        $save->il = $request->il;
        $save->ilce = $request->ilce;
        $save->EkimAlani = $request->EkimAlani;
        $save->CikisDurumu = $request->cikis_durumu;
        $save->GelismeVeBakim = $request->gelisme_bakim_durumu;
        $save->Ay = $request->Ay;
        $save->GozlemDurumu = $request->Gozlem_Durumu;

        $save->save();
        $slider=Slider::all();
        return view('slider', ['slider' => $slider]);
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Category $slider
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Slider $slider)
    {

        $slider->delete();
        return redirect()->back();

    }
    public function show()
    {
         $il = DB::table('iller')->get();
         $ilceler = DB::table('ilceler')->get();
         $Urun = DB::table('urun')->get();
         $cikis = DB::table('cikisdurumu')->get();
         $gelisme = DB::table('gelişmevebakım')->get();
         $Ay = DB::table('Ay')->get();
         return view('createSlider', compact('il', 'ilceler','Urun','cikis','gelisme','Ay'));
         
         
    }

    public function editSlider(Slider $slider)
    {
        $il = DB::table('iller')->get();
        $ilceler = DB::table('ilceler')->get();
        $urun = DB::table('urun')->get();
        $cikis = DB::table('cikisdurumu')->get();
        $gelisme = DB::table('gelişmevebakım')->get();
        $Ay = DB::table('ay')->get();
        return view('editSlider',['slider' => $slider,'il'=>$il,'ilceler'=>$ilceler,'urun'=>$urun,'cikis'=>$cikis,'gelisme'=>$gelisme,'Ay'=>$Ay]);
    }

    public function update(Request $request,$id)
    {
        $slider->Urun = $request->Urun;
        $slider->il = $request->il;
        $slider->ilce = $request->ilce;
        $slider->EkimAlani = $request->EkimAlani;
        $slider->gelisme_bakim_durumu = $request->CikisDurumu;
        $slider->Ay = $request->Ay;
        $slider->Gozlem_Durumu = $request->GozlemDurumu;
        $slider->save();
        return redirect()->back();

    }
    public function edit()
    {
        
        $il = DB::table('iller')->get();
        $ilceler = DB::table('ilceler')->get();
        return view('editSlider', compact('il','ilceler'));
    }

    public function exportPDF()
{
    $data = [
        'slider' => Slider::all()
    ];

    $pdf = PDF::loadView('pdf.slider', $data);
    return $pdf->download('slider.pdf');
}




    


   
}
