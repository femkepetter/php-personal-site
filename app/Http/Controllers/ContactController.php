<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
use App\Libraries\View;

class ContactController extends Controller
{

    public function index()
    {
        $contactModel = new ContactModel();

        View::render('contact/index.view', [
            'contact' => $contactModel::all(),
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

        ContactModel::update($data, 1);
    }

    public function destroy(int $id)
    {
    }
}
