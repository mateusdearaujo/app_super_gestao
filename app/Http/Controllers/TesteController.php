<?php

namespace App\Http\Controllers;

class TesteController extends Controller
{
    public function teste(int $p1, int $p2)
    {
        return view('site.teste', ['x' => $p1, 'y' => $p2]);
    }
}
