@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar etiquetas</h1>
@stop

@section('content')
@if (session('info'))
    <div class="alert alert-danger" role="alert">
        <strong>{{session('info')}}</strong> 
    </div>
@endif
    <div class="card">
        <div class="card-body">
            {!! Form::model($tag, ['route' => ['admin.tags.update', $tag], 'method' => 'put']) !!}
            
            @include('admin.tags.partials.form')

            {!! Form::submit('Actualizar etiqueta', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('js')
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
    <script src="{{asset('js/admin/post/form.js')}}"></script>
@endsection