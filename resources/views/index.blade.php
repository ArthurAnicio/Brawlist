@extends ('layouts.app')

@section ('conteudo')
<a href='/create'>Criar</a>
<div>
    @foreach($brawlers as $brawler)
    
        <div>
            <h2>{{ $brawler->nome }} </h2>
            <h3>{{ $brawler->titulo }} </h3>
            <img width="200px" src="{{$brawler->imagem}}">
            <p>{{ $brawler->categoria}}</p>
            <p>{{ $brawler->raridade}}</p>
            <a href="/edit/{{$brawler->id}}">Editar</a>
            <a href="/alerta/{{$brawler->id}}">Excluir</a>
        </div>
        
    @endforeach
    {{$brawlers->render('paginator.custom-pagination')}}
</div>

@endsection