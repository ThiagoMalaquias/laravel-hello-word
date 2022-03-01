@extends('layouts.app')

@section('content')
 <h1>Mostrando Item</h1>

 <p>Titulo: {{$task->title}}</p>
 <p>Feito?: {{$task->done ? 'Sim' : 'Não'}}</p>
@endsection
