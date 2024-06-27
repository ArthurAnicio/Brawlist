@extends ('layouts.app')

@section ('conteudo')
<a href='/create'>Criar</a>
<div>
    @foreach($brawlers as $brawler)
    <H1> Mostrar Brawlers</H1>
        <div>
            <h2>{{ $brawler->nome }} </h2>
            <h3>{{ $brawler->titulo }} </h3>
            <img width="200px" src="{{$brawler->imagem}}">
            <p>{{ $brawler->categoria}}</p>
            <p>{{ $brawler->raridade}}</p>
            <a href="/edit/{{$brawler->id}}">Editar</a>
            <a href="/alerta/{{$brawler->id}}">Excluir</a>
        </div>
        <footer>Feito pelos Cotemigos</footer>
    @endforeach
</div>
@endsection