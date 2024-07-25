<?php

namespace App\Http\Controllers;

use App\Models\Servico;
use Exception;
use Illuminate\Http\Request;

class ServicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        try {
            $search = isset($_GET['search']) ? $_GET['search'] : null;
            if ($search) {
                $servicos = Servico::select('id','nome','preco', 'imagem_url')->where('nome', 'like', '%' . $search . '%')->orderBy('created_at', 'desc')->get();
                return view('admin.servicos.index', compact('servicos', 'search'));
            } else {
                $servicos = Servico::select('id','nome','preco', 'imagem_url')->orderBy('created_at', 'desc')->get();

                return view('admin.servicos.index', compact('servicos', 'search'));
            }
        } catch (Exception $ex) {
            return back()->with('erro', 'Ocorreu um erro interno, por favor, tente novamente mais tarde');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            return view('admin.servicos.create');
        } catch (Exception $ex) {
            return back()->with('erro', 'Ocorreu um erro interno, por favor, tente novamente mais tarde');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'nome' => 'required',
            'preco' => 'required',
        ], [
            'nome.required' => 'Precisa informar o nome',
            'preco.required' => 'Precisa informar o preco',
        ]);
        try {
            $servico = $request->all();
            if ($request->imagem) {
                $servico['imagem_url'] = $request->file('imagem')->store('servicos');
            }
            Servico::create($servico);
            return redirect()->route('servicos.index')->with('sucesso', 'Serviço criado com sucesso');
        } catch (Exception $ex) {
            return redirect()->route('servicos.index')->with('erro', 'Houve um erro ao criar o serviço');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            $servico = Servico::find($id);
            if (!$servico) {
                return redirect()->route('servicos.index')->with('erro', 'Página inexistente');
            }

            return view('admin.servicos.show', compact('servico'));
        } catch (Exception $ex) {
            return back()->with('erro', 'Ocorreu um erro interno, por favor, tente novamente mais tarde');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        try {
            $servico = Servico::find($id);

            return view('admin.servicos.edit', compact('servico'));
        } catch (Exception $ex) {
            return back()->with('erro', 'Ocorreu um erro interno, por favor, tente novamente mais tarde');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required',
            'preco' => 'required',
        ], [
            'nome.required' => 'Precisa informar o nome',
            'preco.required' => 'Precisa informar o preco',
        ]);
        try {
            $servico = $request->all();
            if ($request->imagem) {
                $servico['imagem_url'] = $request->file('imagem')->store('servicos');
            }
            Servico::find($id)->update($servico);
            return redirect()->route('servicos.show', $id)->with('sucesso', 'Serviço editado com sucesso');
        } catch (Exception $ex) {
            return redirect()->route('servicos.index')->with('erro', 'Houve um erro ao editar o servico');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            if (Servico::find($id)->delete()) {
                return redirect()->route('servicos.index')->with('sucesso', 'Serviço eliminado com sucesso');
            }
            return redirect()->route('servicos.index')->with('erro', 'Houve um erro ao eliminar o servico');
        } catch (Exception $ex) {
            return back()->with('erro', 'Ocorreu um erro interno, por favor, tente novamente mais tarde');
        }
    }
}
