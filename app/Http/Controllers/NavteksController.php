<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Navteks;

class NavteksController extends Controller
{
    public function index()
    {
        //ambil semua data buku latest lalu bagi menjadi 5 data setiap page
        $navteks =  Navteks::latest()->paginate(5);
        // kembalikan halaman view buku list dengan mengirim datanya
        return view('navtekslist',compact('navteks'))
        ->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('navteksadd');
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

            Navteks::create([
                'title'=>$request->title,
                'about'=>$request->about,
            ]);

            return redirect()->route('navteks.index')->with('success','Successfully to create new navteks');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->route('navteks.index')->with('error',$th->getMessage());
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
        $navteks =  Navteks::where('navteks_id',$id)->firstOrFail();

        if($navteks){

            return view('navteksedit',compact('navteks'));
        }else{
            return redirect()->route('navteks.index')->with('error','navteks not found');
        }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

      
        if(!$request->image){
            Navteks::where('navteks_id',$id)->update([
                'title'=>$request->title,
                'about'=>$request->about,
            ]);
        }else{
            Navteks::where('navteks_id',$id)->update([
                'title'=>$request->title,
                'about'=>$request->about,
            ]);
        }
        //


        return redirect()->route('navteks.index')->with('success','Successfully update data');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Navteks::where('navteks_id',$id)->delete();

        return redirect()->route('navteks.index')->with('success','Successfully delete data');
    }

    public function getPriceById(Request $request){
        $navteks =  Navteks::where('navteks_id',$request->id)->firstOrFail();

        return response()->json([
            'navteks'=>$navteks
        ]);
     }
}

