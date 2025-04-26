<?php

namespace App\Http\Controllers;

use App\Http\Requests\generalform;
use App\Http\Requests\generalreq;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Else_;

class pruecontroller extends Controller
{

  public function inicio()
  {
    return view('LOGIN.registro');
  }
 
   public function registro(generalreq $REQUEST){

     $REP=1;
     return view('LOGIN.MEN_PRIN', compact('REP'));



   }
   public function formulario()
   {
     return view('INFO.FOR_REPOR');
   }

    public function registro2(generalform $REQUEST)
    {
      dd($REQUEST->all());
 
   }
}
