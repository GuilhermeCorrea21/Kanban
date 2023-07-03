@extends('layouts.header')
@section('title', 'Quadro Kanban')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guira</title>
    <link rel="stylesheet" href="../css/workspace.css">
    <script src="../js/script.js"></script>
</head>
<body>
    <div class="main">
        <h2>Meus projetos</h2>
        <div class="projects">
        @foreach($workspaces as $workspace)
            <div class="cards">
                <div class="card_box">
                    <div class="init_card">
                        <img src="img/logo_workspace2.png" class="img">
                        <a href="/kanban/{{$workspace->id}}"><p class="title_workspace">{{ $workspace->title }}</p></a>
                    </div>
                    <div class="middle_card">
                        <div class="text_card">FILAS RECENTES</div>
                        <div class="text_card2">Tudo aberto: ({{ $qtd_workspace[$workspace->id - 1] }})</div>
                    </div>
                    <hr>
                    <p id="participants">Participantes: (2)</p>
                </div>
            </div>
            @endforeach
        </div>
        <div id="more_info">
            <p>Atribuidos a você:</p>
            <hr>
            <div class="card_list">
            @foreach($myCards as $myCard)
                <div class="card_row">
                    <img src="img/logo_workspace2.png" class="img2">
                    <div class="content">
                            <a href="/details/{{ $myCard->id }}"><p>{{ $myCard->title }}</p></a>
                        
                    </div>
                </div>
                @endforeach
            </div>
        </div>

</body>
</html>
@endsection