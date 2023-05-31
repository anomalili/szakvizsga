<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\teszt;
use Illuminate\Http\Request;
use DB;

class TesztController extends Controller
{
    public function index()
    {
        $reg = teszt::all();
        return $reg;
    }

    public function kategoriaNevvel()
    { 
        $kerdesek =
        DB::table('teszts')
            ->select('*')
            ->join('kategorias', 'kategorias.id', '=', 'teszts.kategoriaId')
            ->get();
        return $kerdesek;
    }

    public function show($id)
    {
        $reg = teszt::find($id);
        return $reg;
    }
}
