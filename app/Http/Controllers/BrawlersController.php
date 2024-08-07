<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brawler;
use Illuminate\Database\Eloquent\Model;

class BrawlersController extends Controller
{
    public function index() {
        $brawlers = Brawler::paginate(10);
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
    public function edit($id) {
        $reg = Brawler::find($id);
        return view('editar')->with('brawler',$reg);
    }
    public function update(Request $req) {
        $brawler = Brawler::find($req->id);
        $brawler->nome = $req->nome;
        $brawler->titulo = $req->titulo;
        $brawler->imagem = $req->imagem;
        $brawler->categoria = $req->categoria;
        $brawler->raridade = $req->raridade;
        $brawler->save();

        return redirect('/');
    }
    public function alerta($id) {
        $reg = Brawler::find($id);
        return view('alerta')->with('brawler', $reg);
    }
    public function delete(Request $req) {
        $reg = Brawler::find($req->id);
        $reg->delete();
        return redirect('/');
    }
}
