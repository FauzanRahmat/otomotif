@extends('adminlte::page')

@section('title','Testimoni List')

@section('content_header')
    <h1>Testimoni List</h1>
@stop

@section('content')
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-body">
                            @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" id="success-alert" role="alert">
                               <strong>{{  session('success') }}</strong>
                                
                              </div>
                            @endif

                            @if(session('error'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>{{  session('error')}} </strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                              </div>
                            @endif


                            <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Profesi</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Image</th>
                                    <th scope="col" width="350px" class="text-center">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                
                                    @foreach ($testimoni as $c)
                                    <tr>
                                        <th scope="row">{{ ++$i }}</th>
                                        <td>{{ $c->nama }}</td>
                                        <td>{{ $c->prof }}</td>
                                        <td>{{ $c->deskripsi }}</td>
                                        <td><img src="{{ asset('images/'.$c->image)}}" alt=""
                                            width="150px"
                                            ></td>
                                        <td>
                                            <div class="d-flex justify-content-around">
                                                <a href="{{ route('testimoni.edit',$c->testimoni_id)}}" class="btn btn-primary">
                                                    <i class="fas fa-edit"></i>
                                                    Edit</a>
                                                
                                            </div>
                                            
                                        </td>
                                      </tr>
                                    @endforeach
                               
                                 
                                </tbody>
                              </table>

                              {{ $testimoni->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop

@section('js')
   <script>
            
        $("#success-alert").fadeTo(2000, 500).fadeOut(500, function(){
        $("#success-alert").fadeOut(500);
        });
   </script>
@stop