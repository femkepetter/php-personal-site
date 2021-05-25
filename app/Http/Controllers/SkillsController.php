<?php

namespace App\Http\Controllers;

use App\Libraries\MySql;
use App\Models\SkillsModel;
use App\Libraries\View;
use App\Models\SkillsCategoryModel;
use PDO;

class SkillsController extends Controller
{

    public function index() //GET
    {
        $skillCategoryModel = new SkillsCategoryModel();
        $categories = $skillCategoryModel::all();

        $skills = [];

        foreach ($categories as $cat) {
            $sql = "SELECT * FROM skills LEFT JOIN skills_score ON skills.score_id = skills_score.id WHERE category_id=" . $cat->id;
            $res = MySql::query($sql);
            $skills[$cat->id] = $res->fetchAll(PDO::FETCH_ASSOC);
        }

        View::render('skills/index.view', [
            'skills' => $skills,
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

        SkillsModel::update($data, 1);
    }

    public function destroy(int $id)
    {
    }
}
