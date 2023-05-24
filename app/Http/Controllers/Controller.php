<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\Models\SalaCarro;
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
}
