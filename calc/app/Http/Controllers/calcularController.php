<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calcularController extends Controller
{
    public function index(){
        return view('welcome',[
          'festas' =>'',
        ]);
    }
    public function store(Request $request){
      $adultos  = (int)$request->adultos;
      $criancas = (int)$request->criancas;
      $geral    = $adultos+$criancas;

      $salgado = round((100 * ($adultos / 10)) + (10 * ($criancas / 2)));

      $doce = round(5  * ($criancas / 4));
      $carne = round($geral / 6);
      $refrigerante = round(2 * ($geral / 4));

      if ($request->bebida == 's') {
        $cerveja = 12 * ($adultos / 3);
        $cerveja = round($cerveja - (2 * $criancas));
        if ($cerveja <= 0) {
          $cerveja = 0;
        }
        $whisky = round($adultos / 30);
      }else{
        $cerveja = 0;
        $whisky  = 0;
      }
      $festa = [
         'adultos'         => $adultos
        ,'criancas'        => $criancas
        ,'geral'           => $geral
        ,'salgado'         => $salgado
        ,'doce'            => $doce
        ,'carne'           => $carne
        ,'refrigerante'    => $refrigerante
        ,'cerveja'         => $cerveja
        ,'whisky'          => $whisky
        ,'alcool'          => $request->bebida
      ];
      return view('welcome',[
          'festas' =>$festa,
        ]);
    }
}
