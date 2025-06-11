<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data['titulo']='pagina_principal';
            . view('front/head_view',$data);
            . view('front/navbar_view')
            . view('front/principal')
            . view('front/footer_view');
    }

    public function quienes_somos(): string
    {
        $data['titulo']='quienes_somos';
            . view('front/head_view',$data);
            . view('front/navbar_view')
            . view('front/quienes_somos')
            . view('front/footer_view');
    }

    public function acerca_de(): string
    {
        $data['titulo']='acerca_de';
            . view('front/head_view',$data);
            . view('front/navbar_view')
            . view('front/acerca_de')
            . view('front/footer_view');
    }

    public function registro(): string
    {
        $data['titulo']='registro';
            . view('front/head_view',$data);
            . view('front/navbar_view')
            . view('front/registro')
            . view('front/footer_view');
    }
        public function login(): string
    {
        $data['titulo']='login';
            . view('front/head_view',$data);
            . view('front/navbar_view')
            . view('front/login')
            . view('front/footer_view');
    }
}