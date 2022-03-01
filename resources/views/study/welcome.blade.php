<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem Vindo</title>
</head>
<body>
    <h1>Bem Vindo</h1>

    <div style="display: flex">
        <div style="flex: 30%">
            <p><b>Nome: </b> {{$name}}</p>
            <p><b>Idade: </b> {{$age}}</p>
            <p><b>Size: </b> {{ 1 + 1}}</p>
            <p><b>Html: </b> {!! $html !!}</p>
        </div>

        <div style="flex: 30%">
            {{-- Condicionais --}}

            <h1>{{$name == 'Bonieky' ? 'Sim' : 'Não'}}</h1>

            @if($name == 'Alessandro')
                <h1>Sim</h1>
            @else
                <h1>Não</h1>
            @endif
        </div>

        <div style="flex: 30%">
            {{-- Repeticao --}}

            {{-- @for ($i = 0; $i < count($times); $i++)
                <p>{{ $times[$i] }}</p>
            @endfor --}}

            @foreach ($times as $time)
                <p>{{ $time }}</p>
            @endforeach
        </div>
    </div>

    <div style="display: flex">
        <div style="flex: 30%">
             {{-- Components --}}

            @foreach ($times as $time)
                <p>
                    {{ $time }}
                    @include('components.button', ['color' => 'blue', 'tipo' => 'Editar'])
                    @include('components.button', ['color' => 'red', 'tipo' => 'Deletar'])

                    @component('components.card')
                        <button>TEste1</button>
                    @endcomponent

                    @component('components.card')
                        <button>TEste2</button>
                    @endcomponent
                </p>
            @endforeach
        </div>

        <div style="display: flex; flex: 70%">
            @foreach ($pessoas as $pessoa)
                <div style="flex: 30%">
                    <img src="{{$pessoa["image"]}}" alt="{{$pessoa["nome"]}}">
                    <h1>{{$pessoa["nome"]}}</h1>
                    <h1>{{$pessoa["idade"]}}</h1>
                    <h1>{{$pessoa["birth"]}}</h1>
                </div>
            @endforeach
        </div>

    </div>

</body>
</html>
