<?php

namespace App\Http\Controllers;

use App\Models\AboutModel;
use App\Libraries\View;

class AboutController extends Controller
{

    public function index()
    {
        $aboutModel = new AboutModel();

        View::render('about/index.view', [
            'about' => $aboutModel::all(),
        ]);
    }

    public function store()
    {
    }

    public function create()
    {
    }

    public function update()
    {
        $data = [];

        AboutModel::update($data, 1);
    }

    public function destroy(int $id)
    {
    }
}
