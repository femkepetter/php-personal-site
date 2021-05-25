<?php

namespace App\Http\Controllers;

use App\Models\PortfolioModel;
use App\Libraries\View;

class PortfolioController extends Controller
{

    public function index() //GET
    {
        $portfolioModel = new PortfolioModel();

        View::render('portfolio/index.view', [
            'portfolio' => $portfolioModel::all(),
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

        PortfolioModel::update($data, 1);
    }

    public function destroy(int $id)
    {
    }
}
