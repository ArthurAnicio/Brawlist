@extends ('layouts.app')

@section ('conteudo')
<a href='/create'>Criar</a>
<div>
    @foreach($brawlers as $brawler)
        <div>
            <h1>{{ $brawler->nome }} </h1>
            <h2>{{ $brawler->titulo }} </h2>
            <img width="200px" src="{{$brawler->imagem}}">
            <p>{{ $brawler->categoria}}</p>
            <p>{{ $brawler->raridade}}</p>
            <a href="/edit/{{$brawler->id}}">Editar</a>
            <a href="/alerta/{{$brawler->id}}">Excluir</a>
        </div>
    @endforeach
</div>
@endsection