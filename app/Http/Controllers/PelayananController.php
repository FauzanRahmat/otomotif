<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelayanan;

class PelayananController extends Controller
{
    public function index()
    {
        //ambil semua data buku latest lalu bagi menjadi 5 data setiap page
        $pelayanan =  Pelayanan::latest()->paginate(5);
        // kembalikan halaman view buku list dengan mengirim datanya
        return view('pelayananlist',compact('pelayanan'))
        ->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('pelayananadd');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        try {
          // fungsi dibawah digunakan untuk mengambil nama file
            // $imageName =  $request->image->getClientOriginalName();
           // fungsi move untuk mengupload file ke lokal folder public
            // $request->image->move(public_path('images'),$imageName);

            Pelayanan::create([
                'title'=>$request->title,
                'about'=>$request->about,
            ]);

            return redirect()->route('pelayanan.index')->with('success','Successfully to create new pelayanan');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->route('pelayanan.index')->with('error',$th->getMessage());
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
        $pelayanan =  Pelayanan::where('pelayanan_id',$id)->firstOrFail();

        if($pelayanan){

            return view('pelayananedit',compact('pelayanan'));
        }else{
            return redirect()->route('pelayanan.index')->with('error','pelayanan not found');
        }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

      
        if(!$request->image){
            Pelayanan::where('pelayanan_id',$id)->update([
                'title'=>$request->title,
                'about'=>$request->about,
            ]);
        }else{
            Pelayanan::where('pelayanan_id',$id)->update([
                'title'=>$request->title,
                'about'=>$request->about,
            ]);
        }
        //


        return redirect()->route('pelayanan.index')->with('success','Successfully update data');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Pelayanan::where('pelayanan_id',$id)->delete();

        return redirect()->route('pelayanan.index')->with('success','Successfully delete data');
    }

    public function getPriceById(Request $request){
        $pelayanan =  Pelayanan::where('pelayanan_id',$request->id)->firstOrFail();

        return response()->json([
            'pelayanan'=>$pelayanan
        ]);
     }
}

