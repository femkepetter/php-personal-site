<?php

namespace App\Http\Controllers;

class Controller
{

    protected function getRequest()
    {
        return $_SERVER;
    }
}
