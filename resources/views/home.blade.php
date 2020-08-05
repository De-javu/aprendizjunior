@extends('layouts.app')
@include('admin.template.partials.nav')

@section('content')
<div class="container">

                  
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <div>
                         <h1>welcome</h1>
                         <a href=""class ="btn btn-success">boton</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
