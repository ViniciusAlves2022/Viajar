<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Viajar;

class ViajarController extends Controller
{
    public function FormularioCadastro(){
        return view('cadastrarViajar');
    }

    public function MostrarEditarViajar(Request $request){

        //$dadosViajar = Viajar::all();
        //dd($dadosViajar);
        $dadosViajar = Viajar::query();
        $$dadosViajar->when($request->marca,function($query, $v1){
            $query->where('marca','like','%'.$v1.'%');
        });

        $dadosViajar = $dadosViajar->get();
        return view('editarViajar',[
            'registrosViajar'=> $dadosViajar
        ]);
    }

    public function SalvarBanco(Request $request){

        $dadosViajar = $request->validate([
            'modelo' => 'string|required',
            'marca' =>  'string|required',
            'ano'   =>  'string|required',
            'mês'   =>  'string|required',
            'valor' =>  'string|required'
        ]);

        Viajar::create($dadosViajar);
        return Redirect::route('home');
    }


    public function ApagarBancoViajar(Viajar $registrosViajars){
        //dd($registroViajar);
        $registrosViajar->delete();
        //Viajar::findOrfall($id)->delete;
        return Redirect::route('editar-viajar');
        
    }
    public function MostrarAltrearViajar(Viajar $registrosViajar){
        return view('alterarViajar',['registrosViajar' => $registrosViajar]);
    }
    public function AlterarBancoCaminhao(  $registrosViajar, Request $request){
        $banco = $request ->validate([
        'modelo' => 'string|required',
        'marca'  => 'string|required',
        'ano'    => 'string|required',
        'mês'    => 'string|required',
        'valor'  => 'string|required'
    ]);

    $registrosViajar->fill($banco);
    $registrosViajar->save();

    return Redirect::route('editar-viajar');
    }
}
