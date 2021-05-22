<?php

namespace App\Http\Controllers;

use App\Models\AboutModel;
use App\Libraries\View;
use App\Libraries\MySql;

class AboutController extends Controller
{

    public function index() //GET
    {
        $aboutModel = new AboutModel();

        View::render('about/index.view', [
            'about' => $aboutModel::all(),
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

        AboutModel::update($data, 1);
    }

    /**
     * Archive a user record into the database
     */
    public function destroy(int $id) //DELETE
    {
    }
}
