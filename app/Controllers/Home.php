<?php

namespace App\Controllers;

class Home extends BaseController
{
    /* public function index(): string
    {
        return view('welcome_message'); //antigo (padrão)
        // em vez de mexer na rota, poderia colocar assim:'
        //return redirect()->to('/login');
    } */ 

    
    public function index()
    {
        //return view('welcome_message'); antigo (padrão)
        // em vez de mexer na rota, poderia colocar assim:'
        return redirect()->to('/login');
    } 

}
