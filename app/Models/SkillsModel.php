<?php

namespace App\Models;

class SkillsModel extends Model
{
    // Name of the table
    protected $model = "skills";

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
