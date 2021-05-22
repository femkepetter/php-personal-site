<?php

namespace App\Http\Controllers;

use App\Libraries\View;

class HomeController {

    public function index()
    {
        return View::render('home.view', [
            'name' => 'My Name',
            'nog_een_array' => [
                'apple',
                'banana',
            ]
        ]);
    }
}