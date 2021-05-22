<?php

namespace App\Http\Controllers;

use App\Models\EducationModel;
use App\Libraries\View;
use App\Libraries\MySql;

class EducationController extends Controller
{

    public function index() //GET
    {
        $educationModel = new EducationModel();

        View::render('users/index.view', []);
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

        EducationModel::update($data, 1);
    }

    /**
     * Archive a user record into the database
     */
    public function destroy(int $id) //DELETE
    {
    }
}
