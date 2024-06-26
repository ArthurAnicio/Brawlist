<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brawler;

class BrawlersController extends Controller
{
    public function index() {
        $brawlers = Brawler::all();
        return view('index')->with('brawlers', $brawlers);
    }
    public function create() {
        return view('criar');
    }
    public function store(Request $req) {
        $nome = $req->nome;
        $titulo = $req->titulo;
        $imagem = $req->imagem;
        $categoria = $req->categoria;
        $raridade = $req->raridade;

        $brawler = new Brawler();
        $brawler->nome = $nome;
        $brawler->titulo = $titulo;
        $brawler->imagem = $imagem;
        $brawler->categoria = $categoria;
        $brawler->raridade = $raridade;
        $brawler->save();

        return redirect('/');
    }
}
