@extends('layouts.app')

@section('content')
    <h1>Novo Item</h1>

    <form method="POST" action="{{ route('tasks.store')}}">
        @csrf

        <label for="titulo">Titulo</label>
        <input type="text" name='title' id='titulo'>

        <button type="submit">Salvar</button>
    </form>

@endsection
