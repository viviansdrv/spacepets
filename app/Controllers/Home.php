<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
        // em vez de mexer na rota, poderia colocar assim:'
        // return redirect()->to('/login');
    }
}
