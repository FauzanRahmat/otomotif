<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimoni;

class TestimoniController extends Controller
{
    public function index()
    {
        //ambil semua data buku latest lalu bagi menjadi 5 data setiap page
        $testimoni =  Testimoni::latest()->paginate(5);
        // kembalikan halaman view buku list dengan mengirim datanya
        return view('testimonilist',compact('testimoni'))
        ->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('testimoniadd');
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
            $request->image->move('images',$imageName);

            Testimoni::create([
                'nama'=>$request->nama,
                'prof'=>$request->prof,
                'deskripsi'=>$request->deskripsi,
                'image'=>$imageName,
            ]);

            return redirect()->route('testimoni.index')->with('success','Successfully to create new testimoni');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->route('testimoni.index')->with('error',$th->getMessage());
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
        $testimoni =  Testimoni::where('testimoni_id',$id)->firstOrFail();

        if($testimoni){

            return view('testimoniedit',compact('testimoni'));
        }else{
            return redirect()->route('testimoni.index')->with('error','testimoni not found');
        }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

      
        if(!$request->image){
            Testimoni::where('testimoni_id',$id)->update([
                'nama'=>$request->nama, 
                'prof'=>$request->prof,
                'deskripsi'=>$request->deskripsi,
            ]);
        }else{
            $imageName =  $request->image->getClientOriginalName();
            $request->image->move('images',$imageName);
    
            Testimoni::where('testimoni_id',$id)->update([
                'image'=> $imageName,
            ]);
        }
        //


        return redirect()->route('testimoni.index')->with('success','Successfully update data');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Testimoni::where('testimoni',$id)->delete();

        return redirect()->route('testimoni.index')->with('success','Successfully delete data');
    }

    public function getPriceById(Request $request){
        $testimoni =  Testimoni::where('testimoni',$request->id)->firstOrFail();

        return response()->json([
            'testimoni'=>$testimoni
        ]);
     }
}

