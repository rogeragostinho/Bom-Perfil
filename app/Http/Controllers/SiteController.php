<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Servico;
use Exception;

class SiteController extends Controller
{
    public function index()
    {
        try {
            $produtos = Produto::orderBy('created_at', 'desc')->limit(6)->get();
            $servicos = Servico::orderBy('created_at', 'desc')->limit(6)->get();
            return view('public.index', compact('produtos', 'servicos'));
        } catch (Exception $ex) {
            return back()->with('erro', 'Ocorreu um erro interno, por favor, tente novamente mais tarde');
        }
    }
    public function sobre()
    {
        try {
            return view('public.about');
        } catch (Exception $ex) {
            return back()->with('erro', 'Ocorreu um erro interno, por favor, tente novamente mais tarde');
        }
    }
    public function carrinho()
    {
        try {
            return view('public.cart');
        } catch (Exception $ex) {
            return back()->with('erro', 'Ocorreu um erro interno, por favor, tente novamente mais tarde');
        }
    }
    public function checkout()
    {
        try {
            return view('public.checkout');
        } catch (Exception $ex) {
            return back()->with('erro', 'Ocorreu um erro interno, por favor, tente novamente mais tarde');
        }
    }
    public function produto($id)
    {
        try {
            $produto = Produto::find($id);
            return view('public.single-product', compact('produto'));
        } catch (Exception $ex) {
            return back()->with('erro', 'Ocorreu um erro interno, por favor, tente novamente mais tarde');
        }
    }
    public function servico($id)
    {
        try {
            $servico = Servico::find($id);
            return view('public.single-service', compact('servico'));
        } catch (Exception $ex) {
            return back()->with('erro', 'Ocorreu um erro interno, por favor, tente novamente mais tarde');
        }
    }
    public function produtos_e_servicos()
    {
        try {
            $produtos = Produto::orderBy('created_at', 'desc')->get();
            $servicos = Servico::orderBy('created_at', 'desc')->get();
            return view('public.produtos_e_servicos', compact('produtos', 'servicos'));
        } catch (Exception $ex) {
            return back()->with('erro', 'Ocorreu um erro interno, por favor, tente novamente mais tarde');
        }
    }
    public function contato()
    {
        try {
            return view('public.contact');
        } catch (Exception $ex) {
            return back()->with('erro', 'Ocorreu um erro interno, por favor, tente novamente mais tarde');
        }
    }
    public function news(){
        try {
            return view('public.single-news');
        } catch (Exception $ex) {
            return back()->with('erro', 'Ocorreu um erro interno, por favor, tente novamente mais tarde');
        }
    }
}
