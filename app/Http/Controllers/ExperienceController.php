<?php

namespace App\Http\Controllers;

use App\Models\ExperienceModel;
use App\Models\ExperienceTaskModel;
use App\Libraries\View;
use App\Libraries\MySql;
use PDO;

class ExperienceController extends Controller
{

    public function index() //GET
    {
        $experienceModel = new ExperienceModel();
        $experience = $experienceModel::all();

        $data = [];

        foreach ($experience as $key => $exp) {
            $sql = "SELECT * FROM experience_tasks WHERE experience_id =" . $exp->id;
            $res = MySql::query($sql);
            $data[] = [
                'experience'  => $exp,
                'tasks'       => $res->fetchAll(PDO::FETCH_ASSOC),
            ];
        };

        View::render('experience/index.view', [
            'data' => $data,
        ]);
    }
    /**
     * Store a user record into the database
     */
    public function store() //POST
    {
    }

    public function create() //GET
    {
    }

    /**
     * Updates a user record into the database
     */
    public function update() //PUT
    {
        $data = [
            'first_name' => "Code",
            'last_name' => "Gorilla",
            'email' => "toby@codegorilla.nl",
            'password' => "q3234234q3213^^!^w23123",
            'birthday' => "1990-12-31",
            'created' => date("Y-m-d H:i:s"),
        ];

        ExperienceModel::update($data, 1);
    }

    /**
     * Archive a user record into the database
     */
    public function destroy(int $id) //DELETE
    {
    }
}
