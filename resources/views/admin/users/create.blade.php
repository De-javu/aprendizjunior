@extends('layouts.app')




@section('content')
<div class="container">


    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Users') }}</div>

    
                <form action="{{ route('users.store') }}"metho d="POST">
                        <div class="form-row">
                            <div class="col-sm-3">
                               <input type="text"name="name"class="form-control"placeholder="Nombre" value="{{ old( 'name' )}}">
                            </div>
                            <div class="col-sm-4">
                               <input type="text"name="email"class="form-control"placeholder="Email" value="{{ old( 'email' )}}">>
                            </div>
                            <div class="col-sm-3">
                               <input type="password"name="password"class="form-control"placeholder="Contraseña" value="{{ old( 'password' )}}">>
                            </div>
                            <div class="col-auto">
                                @csrf
                               <button type="submint" class="btn btn-primary">Crear</button>
                            </div>
                      


                

        

        </div>
        </div>
    </div>
</div>
         

@endsection
