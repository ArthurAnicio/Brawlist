@extends('layouts.app')

@section('conteudo')
    <form action="/delete" method="post" id="form-delete-{{ $brawler->id }}">
        @method('DELETE')
        <input type="hidden" name="id" value="{{ $brawler->id}}">
        @csrf

        <Div>Alerta!</Div>
        <div></div>
        <label for="excluir"> Tem certeza que deseja excluir o seguinte Brawler: {{$brawler->nome}}?</label>
        
        <button type="submit">SIM</button> <a href="/">NÃO</a>  

    </form>

    @endsection