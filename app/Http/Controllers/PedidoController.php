<?php

namespace App\Http\Controllers;

use App\Mail\PedidoFeito;
use App\Models\Pedido;
use App\Models\ProdutoPedido;
use App\Models\ServicoPedido;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use LukePOLO\LaraCart\Facades\LaraCart;
use PhpParser\Node\Expr\Cast\Double;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        try {
            $pedidos = Pedido::select('id', 'created_at', 'estado', 'cliente_nome', 'total')->orderBy('created_at', 'desc')->get();
            return view('admin.pedidos.index', compact('pedidos'));
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
            $request->validate([
                'nome' => 'required',
                'telefone' => 'required'
            ]);

            $a = LaraCart::total();

            $a = str_replace("\u{A0}", " ", $a);
            //dd($a);


            //dd(LaraCart::total());
            //dd(LaraCart::total()) ;

            $total = explode(' ', $a);

            $total[1] = str_replace('.', '', $total[1]);
            $total[1] = str_replace(',', '.', $total[1]);

            //dd((float) $total[1]);

            $pedido = Pedido::create([
                'data' => date('Y-m-d'),
                'estado' => 'pendente',
                'total' =>  (float) $total[1],
                'cliente_nome' => $request->nome,
                'cliente_email' => $request->email,
                'cliente_endereco' => $request->endereco,
                'cliente_telefone' => $request->telefone,
            ]);
            foreach ($items = LaraCart::getItems() as $item) {
                if ($item->tipo == 'produto') {
                    ProdutoPedido::create([
                        'pedido_id' => $pedido->id,
                        'produto_id' => $item->id,
                        'quantidade' => $item->qty
                    ]);
                } else {

                    $id = $item->id - 100;
                    //dd($item->id, (String)$id);

                    ServicoPedido::create([
                        'pedido_id' => $pedido->id,
                        'servico_id' => $id,
                    ]);
                }
            }
            //Mail::to('rogeragostinho76@gmail.com')->queue(new PedidoFeito($pedido));
            Mail::to(env('EMAIL_DESTINO'))->send(new PedidoFeito($pedido));
            LaraCart::emptyCart();
            return redirect()->route('site.index')->with('sucesso', 'Pedido enviado com sucesso');
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
            $pedido = Pedido::find($id);
            return view('admin.pedidos.show', compact('pedido'));
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
        try {
            Pedido::find($id)->update($request->all());

            return back()->with('sucesso', 'Pedido atualizado');
        } catch (Exception $ex) {
            return back()->with('erro', 'Ocorreu um erro interno, por favor, tente novamente mais tarde');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        try {
            Pedido::find($id)->delete();

            return back()->with('sucesso', 'Pedido eliminado');
        } catch (Exception $ex) {
            return back()->with('erro', 'Ocorreu um erro interno, por favor, tente novamente mais tarde');
        }
    }
}
