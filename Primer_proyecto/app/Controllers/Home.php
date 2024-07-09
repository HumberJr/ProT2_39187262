<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {   
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/principal');
        echo view('front/footer_view');
    //     return view('front/principal');
    // }
    }
    public function importancia_valor(){
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/importancia_valor');
        echo view('front/footer_view');

    }
    public function voluntariado(){
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/voluntariado');
        echo view('front/footer_view');

    }
}