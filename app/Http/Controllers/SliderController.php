<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;

class SliderController extends Controller
{
    public function index()
    {
        //ambil semua data buku latest lalu bagi menjadi 5 data setiap page
        $slider =  Slider::latest()->paginate(5);
        // kembalikan halaman view buku list dengan mengirim datanya
        return view('sliderlist',compact('slider'))
        ->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('slideradd');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        try {
          // fungsi dibawah digunakan untuk mengambil nama file
            $imageName =  $request->image->getClientOriginalName();
           // fungsi move untuk mengupload file ke lokal folder public
            $request->image->move(public_path('images'),$imageName);

            Slider::create([
                'image'=>$imageName,
            ]);

            return redirect()->route('slider.index')->with('success','Successfully to create new slider');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->route('slider.index')->with('error',$th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $slider =  Slider::where('slider_id',$id)->firstOrFail();

        if($slider){

            return view('slideredit',compact('slider'));
        }else{
            return redirect()->route('slider.index')->with('error','slider not found');
        }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

      
        if(!$request->image){
            Slider::where('slider_id',$id)->update([
  
            ]);
        }else{
            $imageName =  $request->image->getClientOriginalName();
            $request->image->move(public_path('images'),$imageName);
    
            Slider::where('slider_id',$id)->update([
                'image'=> $imageName,
            ]);
        }
        //


        return redirect()->route('slider.index')->with('success','Successfully update data');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        slider::where('slider_id',$id)->delete();

        return redirect()->route('slider.index')->with('success','Successfully delete data');
    }

    public function getPriceById(Request $request){
        $slider =  Slider::where('slider_id',$request->id)->firstOrFail();

        return response()->json([
            'slider'=>$slider
        ]);
     }
}

