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
    }
    public function suscribirse()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/register');
        echo view('front/footer_view');
    }
    public function iniciar_sesion()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/login');
        echo view('front/footer_view');
    }
    public function quienes_somos()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/quienes_somos');
        echo view('front/footer_view');
    }
}
