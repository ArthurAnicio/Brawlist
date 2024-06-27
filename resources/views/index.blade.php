@extends ('layouts.app')

@section ('conteudo')
<div id="container">
<div class="blueIcon">
<a href='/create' ><i class="fa-solid fa-plus"></i></a>
</div>
<div id="brawlersContainer">
    @foreach($brawlers as $brawler)
    
        <div class="card">           
            <section>
            <div class="image">
            <img height="150px" src="{{$brawler->imagem}}">
            </div>
            <h2>{{ $brawler->nome }} </h2>
            <h3>{{ $brawler->titulo }} </h3>
            </section>
            <section>
            <h1>Raridade:</h1>
            <h2>{{ $brawler->raridade}}</h2>
            <h1>Categoria:</h1>
            <h2>{{ $brawler->categoria}}</h2>
            <section class="icons">
            <a href="/edit/{{$brawler->id}}" id="editIcon"><i class="fa-solid fa-pen-to-square"></i></a>
            <a href="/alerta/{{$brawler->id}}" id="deleteIcon"><i class="fa-solid fa-trash"></i></a>
            </section>
            </section>
        </div>
        
    @endforeach
    {{$brawlers->render('paginator.custom-pagination')}}
</div>
</div>
@endsection