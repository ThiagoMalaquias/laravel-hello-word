@extends('layouts.app')

@section('content')
    <h1>Listando todos os itens</h1>
    <a href="{{ route('tasks.create')}}">Nova Tarefa</a>

    <br><br><br>
 <table>
     <thead>
        <tr>
            <th>Tarefa</th>
            <th>Feita</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
     </thead>

    <tbody>
        @foreach ($tasks as $task)
        <tr>
            <td>{{$task->title}}</td>
            <td>{{$task->done ? 'Sim' : 'Não'}}</td>
            <td><a href="{{ route('tasks.resolve', ['id' => $task->id])}}">{{$task->done ? 'Desmarcar' : 'Marcar'}}</a></td>
            <td><a href="{{ route('tasks.show', ['id' => $task->id])}}">Show</a></td>
            <td><a href="{{ route('tasks.edit', ['id' => $task->id])}}">Edit</a></td>
            <td><a href="{{ route('tasks.destroy', ['id' => $task->id])}}">Delete</a></td>
        </tr>
        @endforeach
    </tbody>
 </table>
@endsection
