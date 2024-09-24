<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Footer;

class FooterController extends Controller
{
    public function index()
    {
        //ambil semua data buku latest lalu bagi menjadi 5 data setiap page
        $footer =  Footer::latest()->paginate(5);
        // kembalikan halaman view buku list dengan mengirim datanya
        return view('footerlist',compact('footer'))
        ->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('footeradd');
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

            Footer::create([
                'about'=>$request->about,
                'location'=>$request->location,
                'facebook'=>$request->facebook,
                'twitt'=>$request->twitt,
                'instagram'=>$request->instagram,
                'youtube'=>$request->youtube,
            ]);

            return redirect()->route('footer.index')->with('success','Successfully to create new footer');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->route('footer.index')->with('error',$th->getMessage());
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
        $footer =  Footer::where('footer_id',$id)->firstOrFail();

        if($footer){

            return view('footeredit',compact('footer'));
        }else{
            return redirect()->route('footer.index')->with('error','footer not found');
        }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

      
        if(!$request->image){
            Footer::where('footer_id',$id)->update([
                'about'=>$request->about,
                'location'=>$request->location,
                'facebook'=>$request->facebook,
                'twitt'=>$request->twitt,
                'instagram'=>$request->instagram,
                'youtube'=>$request->youtube,
            ]);
        }else{
            Footer::where('footer_id',$id)->update([
                'about'=>$request->about,
                'location'=>$request->location,
                'facebook'=>$request->facebook,
                'twitt'=>$request->twitt,
                'instagram'=>$request->instagram,
                'youtube'=>$request->youtube,
            ]);
        }
        //


        return redirect()->route('footer.index')->with('success','Successfully update data');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Footer::where('footer_id',$id)->delete();

        return redirect()->route('footer.index')->with('success','Successfully delete data');
    }

    public function getPriceById(Request $request){
        $footer =  Footer::where('footer_id',$request->id)->firstOrFail();

        return response()->json([
            'footer'=>$footer
        ]);
     }
}

