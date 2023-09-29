<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    //
    public function index()
    {
        $dati = Train::all();
        $dati = Train::where('data_odierna','>',now())->orderBy('data_odierna','asc')->get();
        return view('home', ['trains'=>$dati]);
    }
}
