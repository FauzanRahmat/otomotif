@extends('adminlte::page')

@section('css')
<style>
      .imgUpload {
                max-width: 300px;
                max-height: 300px;
                min-width: 300px;
                min-height: 300px;
            }
</style>
@stop
@section('title', 'New Product ')
@section('content_header')
    <h1> Edit Product </h1>
@stop

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('product.update',$product->product_id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                         @method('PUT')
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Tahun</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="tahun" id="tahun" value="{{ $product->title}}">
                                </div>
                                
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Judul</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="judul" id="judul" value="{{ $product->title}}">
                                </div>

                                <label for="inputEmail3" class="col-sm-2 col-form-label">Harga</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="harga" id="harga" value="{{ $product->maps}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Image</label>
                                <div class="col-sm-10">
                                    <img src="
                                    @if($product->image=="" || $product->image==null)
                                    {{asset('image/default.png')}}
                                    @else
                                    {{ asset('images/'.$product->image)}}
                                    @endif
                                    " id="imagePreview" class="imgUpload" alt="">
                                    <input type="file" class="form-control" name="image" id="image">
                                  
                                </div>
                            </div>

                            <div class="col-md-12 text-right">
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-save"></i>
                                     Save</button>

                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@stop

@section('js')
<script>

    $('#image').change(function (){
        const file = this.files[0]

        console.log(file)

        if(file){
            let reader = new FileReader()
            reader.onload = function (event){ 
                $('#imagePreview').attr('src',event.target.result)
            }

            reader.readAsDataURL(file);
        }
     })
</script>
@stop