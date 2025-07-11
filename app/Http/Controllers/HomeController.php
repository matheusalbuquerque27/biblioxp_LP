<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\AdmMail;
use App\Mail\LeadMail;
use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

            $dados = [
                'nome' => $request->nome,
                'email' => $request->email,
                'telefone' => $request->telefone,
                'instituicao' => $request->instituicao
            ];

            Mail::to($lead->email)->send(new LeadMail());
            Mail::to('albuquerque0127@gmail.com')->send(new AdmMail($dados));

            return redirect('/')->with('msg', 'Seus dados foram enviados, logo entraremos em contato.');

        } else {

            return redirect('/');
            
        }
    }
}
