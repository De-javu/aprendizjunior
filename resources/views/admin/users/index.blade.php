@extends('layouts.app')


@section('content')
<div class="container">

<a href=" " class="btn btn-info">Registrar nuevo usuario</a>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Lista de Usuarios') }}</div>

                

                <table class ="table table-striped">
                <thead>
                   <th>ID</th>
                   <th>Nombre</th>
                   <th>Correo</th>
                   <th>Tipo</th>
                   <th>Accion</th>
               </thead>

           <tbody>
               @foreach($users as $user)
                   <tr>

                      <td>{{ $user->id }}</td>
                      <td>{{ $user->name }}</td>
                      <td>{{ $user->email }}</td>
                     <td>{{ $user->type }}</td>
                   <td>
                        <a href=""class="btn btn-danger"> </a>
                        <a href=""class="btn btn-warning"></a>
        
                  </td>
                  </tr>
        @endforeach
  </tbody>


</table>
{{ $users->links() }}

@endsection
