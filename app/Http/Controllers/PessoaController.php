<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PessoaController extends Controller
{
    public function index()
    {
        return view('pessoa.index');
    }

    public function create()
    {
        return view('pessoa.create');
    }
}
