<?php

namespace CodeAgenda\Http\Controllers;

use CodeAgenda\Models\Pessoa;
use Illuminate\Http\Request;

class AgendaController extends Controller
{

    public function index($letra = "A")
    {
        $pessoas = Pessoa::where('apelido', 'like', $letra.'%')->get();

        $letras = $this->getLetras();

        return view('agenda', compact('pessoas', 'letras'));
    }

    public function getLetras()
    {
        $letras = [];

        foreach (Pessoa::all() as $pessoa) {
            $letras[] = strtoupper(substr($pessoa->apelido, 0, 1));
        }

        sort($letras);

        return array_unique($letras);
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

        $letras = $this->getLetras();

        return view('agenda', compact('pessoas', 'letras'));
    }
}
