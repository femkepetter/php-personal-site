<?php

namespace App\Models;

class ExperienceModel extends Model
{
    // Name of the table
    protected $table = "experience";

    // Max number of records when fetching all records from table
    protected $limit;

    // Non writable fields
    protected $guarded = [
        'id',
        'deleted',
    ];

    public function __construct()
    {
        parent::__construct(
            $this->table,
            $this->limit,
            $this->guarded,
        );
    }
}
