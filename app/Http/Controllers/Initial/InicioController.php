<?php

namespace App\Http\Controllers\Initial;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index()
    {
        $carousel = [
            "imagens" =>
            [
                [
                    "nome" => "Livro",
                    "url" => "img/image 6.svg"
                ], [
                    "nome" => "Livro2",
                    "url" => "img/image 7.svg"
                ]
            ]
        ];
        return view("initial/inicial", $carousel);
    }
}
