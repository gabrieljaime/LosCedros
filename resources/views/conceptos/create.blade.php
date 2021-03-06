@extends('layouts.app')
@section('page_title', 'Crear Nuevo conceptos')
@section('page_description', 'Cargar los datos para dar de alta un nuevo Conceptos')

@section('content')
<div class="container">

    @include('common.errors')
    <div class="row">
        {!! Form::open(['route' => 'conceptos.store']) !!}
             <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Datos</h3>
                </div>
                <div class="box-body">
                    @include('conceptos.fields')
                </div>
             </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection
