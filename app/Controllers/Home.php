<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('front/head_view')
            . view('front/navbar_view')
            . view('front/principal')
            . view('front/footer_view');
    }

    public function quienes_somos(): string
    {
        return view('front/head_view')
            . view('front/navbar_view')
            . view('front/quienes_somos')
            . view('front/footer_view');
    }

    public function acerca_de(): string
    {
        return view('front/head_view')
            . view('front/navbar_view')
            . view('front/acerca_de')
            . view('front/footer_view');
    }

    public function registro(): string
    {
        return view('front/head_view')
            . view('front/navbar_view')
            . view('front/registro')
            . view('front/footer_view');
    }
        public function login(): string
    {
        return view('front/head_view')
            . view('front/navbar_view')
            . view('front/login')
            . view('front/footer_view');
    }
}