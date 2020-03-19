<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function obras()
    {
        return view('obras');
    }

    public function quem_somos()
    {
        return view('quem');
    }

    public function cadastro()
    {
        return view('users');
    }

    public function produto()
    {
        return view('produto');
    }

    public function artistas()
    {
        return view('artistas');
    }




}
