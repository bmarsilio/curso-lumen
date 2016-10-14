<?php

namespace CodeAgenda\Http\Controllers;

use CodeAgenda\Models\Pessoa;
use Illuminate\Http\Request;

class AgendaController extends Controller
{

    public function index($letra = "A")
    {
        $pessoas = Pessoa::where('apelido', 'ilike', $letra.'%')->get();

        return view('agenda', compact('pessoas'));
    }

    public function busca(Request $request)
    {
        $busca = $request->busca;

        $pessoas = [];

        if(!empty($busca)) {
            $pessoas = Pessoa::where('nome', 'ilike', "%{$busca}%")
                ->orWhere('apelido', 'ilike', "%{$busca}%")
                ->get();
        }

        return view('agenda', compact('pessoas'));
    }
}
