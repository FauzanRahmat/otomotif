@extends('adminlte::page')

@section('title','Footer List')

@section('content_header')
    <h1>Footer List</h1>
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
                                    <th scope="col">About</th>
                                    <th scope="col">Location</th>
                                    <th scope="col">Facebook</th>
                                    <th scope="col">Twitter</th>
                                    <th scope="col">Instagram</th>
                                    <th scope="col">Youtube</th>

                                    <th scope="col" width="500px" class="text-center">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                
                                    @foreach ($footer as $e)
                                    <tr>
                                        <th scope="row">{{ ++$i }}</th>
                                        <td>{{ $e->about }}</td>
                                        <td>{{ $e->location }}</td>
                                        <td>{{ $e->facebook }}</td>
                                        <td>{{ $e->twitt }}</td>
                                        <td>{{ $e->instagram }}</td>
                                        <td>{{ $e->youtube }}</td>

                                        <td>
                                            <div class="d-flex justify-content-around">
                                                <a href="{{ route('footer.edit',$e->footer_id)}}" class="btn btn-primary">
                                                    <i class="fas fa-edit"></i>
                                                    Edit</a>
                                                
                                            </div>
                                            
                                        </td>
                                      </tr>
                                    @endforeach
                               
                                 
                                </tbody>
                              </table>

                              {{ $footer->links()}}
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