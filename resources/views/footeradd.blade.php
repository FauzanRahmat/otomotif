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
@section('title', 'New Footer ')
@section('content_header')
    <h1>Create a New footer </h1>
@stop

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('footer.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">About</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="about" id="about">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Location</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="location" id="location">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Facebook</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="facebook" id="facebook">
                                </div>
                            </div><div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Twitter</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="twitt" id="twitt">
                                </div>
                            </div><div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Instagram</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="instagram" id="instagram">
                                </div>
                            </div><div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Youtube</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="youtube" id="youtube">
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
// jquery dibawah fungsinya untuk membuat events ketika file di ubah maka gambar yang muncul juga terupdate
    $('#image').change(function (){
        // buat variabel file untuk mengambil file
        const file = this.files[0]

        console.log(file)
  
        if(file){
            // buat objek FileReader
            let reader = new FileReader()
              // gunakan fungsi onload yang akan merefresh target gambarnya saja
            reader.onload = function (event){ 
                $('#imagePreview').attr('src',event.target.result)
            }
            // baca data sesuai file yang di minta
            reader.readAsDataURL(file);
        }
     })
</script>
@stop