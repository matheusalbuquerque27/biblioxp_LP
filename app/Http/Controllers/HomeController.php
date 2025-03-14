<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Lead;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function store(Request $request) {

        $lead = new Lead;
        
        $lead->nome = $request->nome;
        $lead->email = $request->email;
        $lead->telefone = $request->telefone;
        $lead->instituicao = $request->instituicao;
        $lead->data_contato = date('Y-m-d');

        if($lead->save()){
            return redirect('/')->with('msg', 'Seus dados foram enviados, logo entraremos em contato.');
        }
    }
}
