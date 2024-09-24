<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logo;

class LogoController extends Controller
{
    public function index()
    {
        //ambil semua data buku latest lalu bagi menjadi 5 data setiap page
        $logo =  Logo::latest()->paginate(5);
        // kembalikan halaman view buku list dengan mengirim datanya
        return view('logolist',compact('logo'))
        ->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('logoadd');
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

            Logo::create([
                'image'=>$imageName,
            ]);

            return redirect()->route('logo.index')->with('success','Successfully to create new logo');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->route('logo.index')->with('error',$th->getMessage());
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
        $logo =  Logo::where('logo_id',$id)->firstOrFail();

        if($logo){

            return view('logoedit',compact('logo'));
        }else{
            return redirect()->route('logo.index')->with('error','logo not found');
        }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

      
        if(!$request->image){
            Logo::where('logo_id',$id)->update([
            ]);
        }else{
            $imageName =  $request->image->getClientOriginalName();
            $request->image->move(public_path('images'),$imageName);
    
            Logo::where('logo_id',$id)->update([
                'image'=> $imageName,
            ]);
        }
        //


        return redirect()->route('logo.index')->with('success','Successfully update data');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Logo::where('logo_id',$id)->delete();

        return redirect()->route('logo.index')->with('success','Successfully delete data');
    }

    public function getPriceById(Request $request){
        $logo =  Logo::where('logo_id',$request->id)->firstOrFail();

        return response()->json([
            'logo'=>$logo
        ]);
     }
}
