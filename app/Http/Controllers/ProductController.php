<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        //ambil semua data buku latest lalu bagi menjadi 5 data setiap page
        $product =  Product::latest()->paginate(5);
        // kembalikan halaman view buku list dengan mengirim datanya
        return view('productlist',compact('product'))
        ->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('productadd');
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

            Product::create([
                'tahun'=>$request->tahun,
                'judul'=>$request->judul,
                'harga'=>$request->harga,
                'image'=>$imageName,
            ]);

            return redirect()->route('product.index')->with('success','Successfully to create new product');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->route('product.index')->with('error',$th->getMessage());
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
        $product =  Product::where('product_id',$id)->firstOrFail();

        if($product){

            return view('productedit',compact('product'));
        }else{
            return redirect()->route('product.index')->with('error','product not found');
        }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

      
        if(!$request->image){
            Product::where('product_id',$id)->update([
                'tahun'=>$request->tahun,
                'judul'=>$request->judul,
                'harga'=>$request->harga,
            ]);
        }else{
            $imageName =  $request->image->getClientOriginalName();
            $request->image->move(public_path('images'),$imageName);
    
            Product::where('product_id',$id)->update([
                'image'=> $imageName,
            ]);
        }
        //


        return redirect()->route('product.index')->with('success','Successfully update data');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Product::where('product_id',$id)->delete();

        return redirect()->route('product.index')->with('success','Successfully delete data');
    }

    public function getPriceById(Request $request){
        $product =  Product::where('product_id',$request->id)->firstOrFail();

        return response()->json([
            'product'=>$product
        ]);
     }
}
