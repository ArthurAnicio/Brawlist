@extends('layouts.app')

@section('conteudo')
<div class="container">
    <form action="/store" method="post" id="formBrawler">
        @csrf

        
        <div>
            <label id="title">
                Criação
            </label>
        <p>
            <label for="palavra">Nome:</label>
            <input type="text" id="nome" name="nome" value="">
        </p>

        <p>
            <label for="titulo">Titulo:</label>
            <input type="text" id="titulo" name="titulo" value="">
        </p>
        <p>
            <label for="imagem">Url da imagem:</label>
            <input type="text" id="urlimagem" name="imagem" value="">
        </p>

        <p>
            <label for="raridade">Raridade:</label>
            <select id="raridade" name="raridade">
                <option value="Inicial">Inicial</option>
                <option value="Raro">Raro</option>
                <option value="Super-Raro">Super-Raro</option>
                <option value="Épico">Épico</option>
                <option value="Mítico">Mítico</option>
                <option value="Lendário">Lendário</option>
            </select>
        </p>

        <p>
            <label for="categoria">Categoria:</label>
            <select id="categoria" name="categoria">
                <option value="Destruidor">Destruidor</option>
                <option value="Algoz">Algoz</option>
                <option value="Tiro-Preciso">Tiro-Preciso</option>
                <option value="Detonador">Detonador</option>
                <option value="Tanque">Tanque</option>
                <option value="Suporte">Suporte</option>
                <option value="Controle">Controle</option>
            </select>
        </p>

       
        <div id="submitBtn">
            <button type="submit" id="enviarBrawler" disabled="disabled">Criar</button>    
        </div>
        <p id="unfilledAlert">*Preencha todos os campos!</p>
        
    </div>
        
    </form>
    </div>
    @vite('resources/js/validate.js')
    @endsection