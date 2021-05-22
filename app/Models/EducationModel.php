<?php

namespace App\Models;

class EducationModel extends Model
{
    // Name of the table
    protected $model = "educations";

    // Max number of records when fetching all records from table
    protected $limit;

    // Non writable fields
    protected $guarded = [
        'id',
        'deleted',
    ];

    public function __construct()
    {
        parent::__construct($this->model);
    }
}
