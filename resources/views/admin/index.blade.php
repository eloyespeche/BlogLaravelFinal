@extends('admin.template.main')

@section('title', 'Home')


@section('content')
    <h1>Bienvenido al Panel de Administración</h1>
    <h4><a href="{{ route('admin.articles.create') }}" class="btn btn-default">
		Crear un nuevo artículo
	</a> | <a href="{{ route('admin.categories.create') }}" class="btn btn-default">
		Crear nueva categoria
	</a> | <a href="{{ route('admin.tags.create') }}"
       class="btn btn-default">
     	Crear nuevo tag
    </a></h4>
@endsection