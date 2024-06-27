@extends('layouts.app')

@section('conteudo')
    <form action="/update" method="post" id="formBrawler">
        @method('PUT')
        <input type="hidden" name="id" value="{{$brawler->id}}">
        @csrf

        
        <Div>
            <h1>
                Edição
            </h1>
        
        <p>
            <label for="palavra">Nome</label>
            <input type="text" id="nome" name="nome" value="{{ $brawler->nome }}">
        </p>

        <p>
            <label for="titulo">Titulo</label>
            <input type="text" id="titulo" name="titulo" value="{{ $brawler->titulo }}">
        </p>
        <p>
            <label for="imagem">Url da imagem</label>
            <input type="text" id="urlimagem" name="imagem" value="{{ $brawler->imagem }}">
        </p>

        <p>
            <label for="raridade">Raridade</label>
            <select id="raridade" name="raridade">
                <option value="Inicial" {{$brawler->raridade == 'Inicial' ? 'selected' : ''}}>Inicial</option>
                <option value="Raro" {{$brawler->raridade == 'Raro' ? 'selected' : ''}}>Raro</option>
                <option value="Super-Raro" {{$brawler->raridade == 'Super-Raro' ? 'selected' : ''}}>Super-Raro</option>
                <option value="Épico" {{$brawler->raridade == 'Épico' ? 'selected' : ''}}>Épico</option>
                <option value="Mítico" {{$brawler->raridade == 'Mítico' ? 'selected' : ''}}>Mítico</option>
                <option value="Lendário" {{$brawler->raridade == 'Lendário' ? 'selected' : ''}}>Lendário</option>
            </select>
        </p>

        <p>
            <label for="categoria">Categoria</label>
            <select id="categoria" name="categoria">
                <option value="Destruidor" {{$brawler->categoria == 'Destruidor' ? 'selected' : ''}}>Destruidor</option>
                <option value="Algoz" {{$brawler->categoria == 'Algoz' ? 'selected' : ''}}>Algoz</option>
                <option value="Tiro-Preciso" {{$brawler->categoria == 'Tiro-Preciso' ? 'selected' : ''}}>Tiro-Preciso</option>
                <option value="Detonador" {{$brawler->categoria == 'Detonador' ? 'selected' : ''}}>Detonador</option>
                <option value="Tanque" {{$brawler->categoria == 'Tanque' ? 'selected' : ''}}>Tanque</option>
                <option value="Suporte" {{$brawler->categoria == 'Suporte' ? 'selected' : ''}}>Suporte</option>
                <option value="Controle" {{$brawler->categoria == 'Controle' ? 'selected' : ''}}>Controle</option>
            </select>
        </p>

       
        <p>
            <button type="submit" id="enviarBrawler">Salvar</button>    
        </p>
        <p id="unfilledAlert"></p>

    </Div>
            
       
    </form>
    @vite('resources/js/validate.js')
    @endsection