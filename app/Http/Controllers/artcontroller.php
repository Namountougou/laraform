<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class artcontroller extends Controller
{
    public function index()
    {
        $art=[
            'titre'=>'Mon premier article',
            'contenu' => 'je suis le mrilleur en laravel'
        ];
        return view('articles' , compact('art'));

        ;
    }
    /* On recupere les données de la route dans la methode show (public function show($id)) et on les injecte dans la vue.
    pour injecter des donnees dans la vue on distingue plusieurs methodes:
    - compact() permet de creer un tableau avec les donnees que l'on veut injecter dans la vue.
    - with() permet de creer un tableau avec les donnees que l'on veut injecter dans la vue.
     -- on peut injecter plusieurs variables dans la vue en faisant compact('variable1','variable2','variable3').
   -- on peut aussi injecter des données dans la vue avec la methode with('variable',$variable).      -Avec with on peut injecter plusieurs variables dans la vue en faisant with('variable1',$variable1,'variable2',$variable2).
     
     */
     
     
    public function show($id)
    {
        $art= [1 => 'Mon premier article',
        2 => 'Mon deuxieme article',];
        return view('articles' , [
            'art' => $art[$id]
        
        ]);
        
       
    }
    public function contact()
    {
        return view('contact');
    }

   
    }

