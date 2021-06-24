@extends('app')

@section('titulo', 'E-Diaristas - Editar diarista')
@section('conteudo')
    <h1>Editar diarista</h1>
    <form action="{{ route('diaristas.update', $diarista) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @include('_form')
    </form>
@endsection
