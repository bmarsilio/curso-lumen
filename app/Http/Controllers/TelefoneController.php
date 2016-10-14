<?php

namespace CodeAgenda\Http\Controllers;

use CodeAgenda\Models\Telefone;

class TelefoneController extends Controller
{
    public function delete($id)
    {
        $telefone = Telefone::find($id);

        $pessoa = $telefone->pessoa;

        return view('telefone.delete', compact('telefone', 'pessoa'));
    }

    public function destroy($id)
    {
        Telefone::destroy($id);

        return redirect()->route('agenda.index');
    }
}
