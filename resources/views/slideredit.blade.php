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
@section('title', 'New Slider')
@section('content_header')
    <h1> Edit Slider</h1>
@stop

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('slider.update',$slider->slider_id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                         @method('PUT')
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Image</label>
                                <div class="col-sm-10">
                                    <img src="
                                    @if($slider->image=="" || $slider->image==null)
                                    {{asset('image/default.png')}}
                                    @else
                                    {{ asset('images/'.$slider->image)}}
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