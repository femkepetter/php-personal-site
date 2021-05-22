<?php

namespace App\Models;

class AboutModel extends Model
{
    // Name of the table
    protected $model = "about";

    // Max number of records when fetching all records from table
    protected $limit;

    // Non writable fields
    protected $guarded = [
        'id',
        'updated',
        'deleted',
        'updated_by',
        'deleted_by',
    ];

    public function __construct()
    {
        parent::__construct($this->model);
    }
}
