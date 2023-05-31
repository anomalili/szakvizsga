<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\kategoria;
use Illuminate\Http\Request;

class KategoriaController extends Controller
{
    public function index()
    {
        $reg = kategoria::all();
        return $reg;
    }
}
