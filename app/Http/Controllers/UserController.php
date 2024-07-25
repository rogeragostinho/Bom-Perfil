<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        try {
            $usuarios = User::all();
            return view('admin.users.index', compact('usuarios'));
        } catch (Exception $ex) {
            return back()->with('erro', 'Ocorreu um erro interno, por favor, tente novamente mais tarde');
        }
    }

    public function destroy($id)
    {
        try {
            User::find($id)->delete();
            return redirect()->route('users.index')->with('sucesso', 'Usuário eliminado com sucesso');
        } catch (Exception $ex) {
            return back()->with('erro', 'Ocorreu um erro interno, por favor, tente novamente mais tarde');
        }
    }
}
