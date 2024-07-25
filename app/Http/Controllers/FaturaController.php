<?php

namespace App\Http\Controllers;

use App\Models\ContadorFatura;
use App\Models\Pedido;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Exception;

class FaturaController extends Controller
{
    public function gerar($id)
    {
        try {
            $contador = ContadorFatura::find(1);
            if (!$contador) {
                $contador = ContadorFatura::create([
                    'id' => 1,
                    'contador' => 0
                ]);
            }
            $n = $contador->contador + 1;
            $contador->update(['contador' => $n]);
            $format = "d-m-Y";
            $data = date($format);
            $nome = "fatura-" . $data;
            (array)$pedido = Pedido::find($id);

            /*$pdf = Pdf::loadView('pdf.fatura', [
            'pedido' => $pedido,
            'n' => $n
        ]);*/

            //return $pdf->download($nome.'.pdf');

            return Pdf::loadView('pdf.fatura', [
                'pedido' => $pedido,
                'n' => $n
            ])/*->save($nome.'.pdf')*/->stream($nome . '.pdf');
        } catch (Exception $ex) {
            return back()->with('erro', 'Ocorreu um erro interno, por favor, tente novamente mais tarde');
        }
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

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
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    }
}
