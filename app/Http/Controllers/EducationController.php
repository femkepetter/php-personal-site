<?php

namespace App\Http\Controllers;

use App\Libraries\MySql;
use App\Models\EducationModel;
use App\Libraries\View;
use App\Models\EducationCategoryModel;
use PDO;

class EducationController extends Controller
{

    public function index() //GET
    {
        $educationCategoryModel = new EducationCategoryModel;
        $categories = $educationCategoryModel::all();

        $educations = [];

        foreach ($categories as $cat) {
            $sql = "SELECT * FROM educations WHERE category_id=" . $cat->id;
            $res = MySql::query($sql);
            $educations[$cat->id] = $res->fetchAll(PDO::FETCH_ASSOC);
        };

        View::render('educations/index.view', [
            'educations' => $educations,
            'categories' => $categories,
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
