@extends('layouts.principal')

@section('content')

{!! Form::open(['route'=>'docente.store','method'=>'POST']) !!}
    <div class="form-group">
        {!! Form::label('monbre') !!}
        {!! Form::text('name', null, ['class'=>'from-control','placeholder'=>'ingresar nombre ']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('apellido paterno') !!}
        {!! Form::text('firstLastName', null, ['class'=>'from-control','placeholder'=>'ingresar apellido paterno']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('apellido materno') !!}
        {!! Form::text('secondLastName', null, ['class'=>'from-control','placeholder'=>'ingresar apellido materno']) !!}
    </div>
    {!! Form::submit('Registrar', ['class'=>'btn btn-primary']) !!}
{!! Form::close() !!}

@stop