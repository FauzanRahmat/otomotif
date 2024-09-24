@extends('adminlte::page')

@section('title','Dashboard')
    
@section('content')
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">


<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        
                    @endif

                    {{ __('You are logged in!') }}

                </div>

                
                <div class="card-footer">


                </div>

            </div>
        </div>
    </div>
</div>
@stop