<?php

namespace App\Http\Controllers;

use App\Models\Series;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SerieController extends Controller
{
    public function index(Request $request)
    {
        $series = Series::query()->orderBy('nome')->get();
        return view('series.index')->with('series',$series);
    }

    public function creat(){
        return view('series.create');
    }


    public function store(Request $request)
    {
        $nomeSerie = $request->input('nome');
        $serie = new Series();
        $serie->nome = $nomeSerie;
        $serie->save();
         return redirect('/series');
    }
}
