<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use App\Models\User;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $livros = Livro::all();
        return view("adm/livro", compact('livros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view("adm/livro/create", compact("users"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|integer',
            'nomelivro' => 'required|max:255',
            'autor' => 'required|max:255',
            'resenha' => 'required',
            'imagem' => 'required|max:255',
        ]);
        if ($validated) {
            $livro = new Livro();
            $livro->user_id = $request->get('user');
            $livro->nomelivro = $request->get('nomelivro');
            $livro->autor = $request->get('autor');
            $livro->resenha = $request->get('resenha');
            $livro->imagem = $request->get('imagem');
            $livro->save();
            return redirect("livro");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Livro  $livro
     * @return \Illuminate\Http\Response
     */
    public function show(Livro $livro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Livro  $livro
     * @return \Illuminate\Http\Response
     */
    public function edit(Livro $livro)
    {
        $users = User::all();
        return view("adm/livro/edit", compact("users", "livro"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Livro  $livro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Livro $livro)
    {
        $validated = $request->validate([
            'user_id' => 'required|integer',
            'nomelivro' => 'required|max:255',
            'autor' => 'required|max:255',
            'resenha' => 'required',
            'imagem' => 'required|max:255',
        ]);
        if ($validated) {
            $livro->user_id = $request->get('user_id');
            $livro->nomelivro = $request->get('nomelivro');
            $livro->autor = $request->get('autor');
            $livro->resenha = $request->get('resenha');
            $livro->imagem = $request->get('imagem');
            $livro->save();
            return redirect("livro");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Livro  $livro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Livro $livro)
    {
        $livro->delete();
        return redirect("livro");
    }
}
