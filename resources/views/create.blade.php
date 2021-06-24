@extends('app')

@section('titulo', 'E-Diaristas - Criar diarista')
@section('conteudo')
    <h1>Criar diarista</h1>
    <form action="{{ route('diaristas.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        @include('_form')

    </form>
@endsection
