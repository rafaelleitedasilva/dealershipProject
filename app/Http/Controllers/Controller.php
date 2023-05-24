<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\Models\{
    SalaCarro,
    User
};
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function view(Request $request){
        $id = $request->sala;

        $carros = new SalaCarro;
        $carros = $carros->where('sala_id', $id)->get();

        return view('carros')->with('carros', $carros);
    }

    public function delete(Request $request){
        $id = $request->id;

        $carros = new SalaCarro;
        $carros = $carros->where('id', $id)->delete();

        return redirect()->back();
    }

    public function cliente(Request $request){
        $clientes = new User;
        $clientes = $clientes->get();

        $carro_sala = new SalaCarro;
        $carro_sala = $carro_sala->where('id', $request->id)->first();

        return view('venda')->with('clientes', $clientes);
    }
}
