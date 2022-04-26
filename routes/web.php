<?php

use Illuminate\Support\Facades\Route;
use Dompdf\Dompdf;
use Dompdf\Options;
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
function PDF(){
$var='<h1>Hello World !</h1>';
    return $var;
}

Route::get('/', function () {
    $var=\App::make('dompdf.wrapper');
    $var->loadHTML(PDF());
    return $var->setPaper('A4')->stream('');
});
