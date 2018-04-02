@extends('layout.principal')
@section('content')

<table>
    <thead>
        <th>nombre</th>
        <th>apellido paterno</th>
        <th>apellido materno</th>
    </thead>
    @foreach($users as $user)
    <tbody> 
        <td>{{$user =>nombre}}</td>
        <td>{{$user =>apellidoPaterno}}</td>
        <td>{{$user =>ApellidoMaterno}}</td>
    </tbody>
</table>
@stop