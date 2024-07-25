<?php

namespace App\Http\Controllers;

use App\Models\Mensagem;
use Exception;
use Illuminate\Http\Request;

class MensagemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        try {
            $mensagens = Mensagem::select('id','created_at', 'email', 'telefone')->orderBy('created_at', 'Desc')->get();

            return view('admin.mensagens.index', compact('mensagens'));
        } catch (Exception $ex) {
            return back()->with('erro', 'Ocorreu um erro interno, por favor, tente novamente mais tarde');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        try {
            Mensagem::create($request->all());
            return redirect()->route('site.index')->with('sucesso', 'Mensagem enviada');
        } catch (Exception $ex) {
            return back()->with('erro', 'Ocorreu um erro interno, por favor, tente novamente mais tarde');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        try {
            $mensagem = Mensagem::find($id);
            return view('admin.mensagens.show', compact('mensagem'));
        } catch (Exception $ex) {
            return back()->with('erro', 'Ocorreu um erro interno, por favor, tente novamente mais tarde');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        try {
             Mensagem::find($id)->delete();
            return redirect()->route('mensagens.index')->with('sucesso', 'Mensagem apagada');
        } catch (Exception $ex) {
            return back()->with('erro', 'Ocorreu um erro interno, por favor, tente novamente mais tarde');
        }
    }
}
