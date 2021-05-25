<?php

namespace App\Http\Controllers;

use App\Models\EducationModel;
use App\Libraries\View;

class EducationController extends Controller
{

    public function index() //GET
    {
        $educationModel = new EducationModel();

        View::render('educations/index.view', [
            'educations' => $educationModel::all(),
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

        EducationModel::update($data, 1);
    }

    public function destroy(int $id)
    {
    }
}
