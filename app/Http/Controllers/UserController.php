<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use App\Libraries\View;
use App\Libraries\MySql;

class UserController extends Controller
{

    public function index() //GET
    {
        $userModel = new UserModel();

        View::render('users/index.view', [
            'users' => $userModel::all(),
            'foods' => 'Pannekoeken',
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

        UserModel::update($data, 1);
    }

    /**
     * Archive a user record into the database
     */
    public function destroy(int $id) //DELETE
    {
    }
}
