@extends('layouts.app')

@section('conteudo')
    <form action="/exclusao/alerta" method="post">
        @csrf

        <Div>Alerta!</Div>
        <div></div>
        <label for="excluir"> Tem certeza que deseja excluir?</label>
        
        <button id="sim" type="submit">SIM</button>    <button id="nao" type="submit">NÂO</button>   

    </form>

    @endsection