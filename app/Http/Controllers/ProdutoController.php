<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Exception;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    protected $produto;
    public function __construct(Produto $produto)
    {
        $this->produto = $produto;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $search = isset($_GET['search']) ? $_GET['search'] : null;
            if ($search) {
                $produtos = $this->produto->select('id','nome','preco', 'imagem_url')->where('nome', 'like', '%' . $search . '%')->orderBy('created_at', 'desc')->get();
                return view('admin.produtos.index', compact('produtos', 'search'));
            } else {
                $produtos = $this->produto->select('id','nome','preco', 'imagem_url')->orderBy('created_at', 'desc')->get();

                return view('admin.produtos.index', compact('produtos', 'search'));
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
            return view('admin.produtos.create');
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
            $produto = $request->all();
            if ($request->imagem) {
                $produto['imagem_url'] = $request->file('imagem')->store('produtos');
            }
            $this->produto->create($produto);
            return redirect()->route('produtos.index')->with('sucesso', 'Produto criado com sucesso');
        } catch (Exception $ex) {
            return redirect()->route('produtos.index')->with('erro', 'Houve um erro ao criar o produto');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        try {
            $produto = $this->produto->find($id);
            if (!$produto) {
                return redirect()->route('produtos.index')->with('erro', 'Página inexistente');
            }

            return view('admin.produtos.show', compact('produto'));
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
            $produto = $this->produto->find($id);

            return view('admin.produtos.edit', compact('produto'));
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
            $produto = $request->all();
            if ($request->imagem) {
                $produto['imagem_url'] = $request->file('imagem')->store('produtos');
            }
            $this->produto->find($id)->update($produto);
            return redirect()->route('produtos.show', $id)->with('sucesso', 'Produto editado com sucesso');
        } catch (Exception $ex) {
            return redirect()->route('produtos.index')->with('erro', 'Houve um erro ao editar o produto');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            if ($this->produto->find($id)->delete()) {
                return redirect()->route('produtos.index')->with('sucesso', 'Produto eliminado com sucesso');
            }
            return redirect()->route('produtos.index')->with('erro', 'Houve um erro ao eliminar o produto');
        } catch (Exception $ex) {
            return back()->with('erro', 'Ocorreu um erro interno, por favor, tente novamente mais tarde');
        }
    }
}
