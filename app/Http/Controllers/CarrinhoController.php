<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use LukePOLO\LaraCart\Facades\LaraCart;

class CarrinhoController extends Controller
{
    //
    public function add(Request $request)
    {
        try {
            if ($request->tipo == 'produto') {
                if (!$request->quantidade) {
                    $request['quantidade'] = 1;
                }

                LaraCart::add(
                    $request->id,
                    $request->nome,
                    $request['quantidade'],
                    $request->preco,
                    [
                        'tipo' => $request->tipo,
                        'imagem_url' => $request->imagem_url
                    ]
                );
            } else {
                if ($request->tipo == 'servico') {
                    (string) $id = $request->id + 100;
                    LaraCart::add(
                        (string) $id,
                        $request->nome,
                        1,
                        $request->preco,
                        [
                            'tipo' => $request->tipo,
                            'imagem_url' => $request->imagem_url
                        ]
                    );
                }
            }

            //LaraCart::getHash();
            return redirect()->route('site.carrinho');
        } catch (Exception $ex) {
            return back()->with('erro', 'Ocorreu um erro interno, por favor, tente novamente mais tarde');
        }
    }

    public function update(Request $request)
    {

        try {
            /*LaraCart::add(
            $request->id,
            $request->nome,
            1,
        );*/
            //dd(LaraCart::getItems());
            //dd(gettype($request->id));
            $item = LaraCart::find(['id' => $request->id]);
            //        dd($item);
            //dd($item);
            $itemHash = $item->getHash();
            //dd($itemHash);
            LaraCart::updateItem(
                $itemHash,
                'qty',
                $request->quantidade
            );
            return redirect()->route('site.carrinho');
        } catch (Exception $ex) {
            return back()->with('erro', 'Ocorreu um erro interno, por favor, tente novamente mais tarde');
        }
    }

    public function delete($id)
    {
        try {
            $item = LaraCart::find(['id' => $id]);
            //        dd($item);
            LaraCart::removeItem($item->getHash());
            return redirect()->route('site.carrinho');
        } catch (Exception $ex) {
            return back()->with('erro', 'Ocorreu um erro interno, por favor, tente novamente mais tarde');
        }
    }
}
