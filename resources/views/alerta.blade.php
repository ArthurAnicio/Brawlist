@extends('layouts.app')

@section('conteudo')
<div class="container">
    <form action="/delete" method="post" id="form-delete-{{ $brawler->id }}" class="deleteBrawler">
        @method('DELETE')
        <input type="hidden" name="id" value="{{ $brawler->id}}">
        @csrf

        <div id="alertTitle">Alerta!</div>
        <label for="excluir"> Tem certeza que deseja excluir {{$brawler->nome}}?</label>
        
        <section class="choice">
        <button class="deleteBtn" type="submit">SIM</button> <a href="/" class="deleteBtn">NÃO</a>  
        </section>

    </form>
    </div>
    @endsection