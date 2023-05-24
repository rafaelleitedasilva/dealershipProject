<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Models\SalaCarro;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function(){
    $model = new SalaCarro;
    $model = $model->get();
    $carros = [0,0,0,0,0,0,0,0,0,0,0,0];
    
    foreach($model as $m){
        $carros[$m->sala_id] = $carros[$m->sala_id] + 1;
    }
    return view('index')->with('carros', $carros);
});

Route::get('/carros', [Controller::class, 'view'])->name('salas.carros');
