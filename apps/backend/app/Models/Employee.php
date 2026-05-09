<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\Relations\BelongsTo;

class Employee extends Model
{
    protected $table = 'employees'; //optional
    protected $fillable = [
        'email',
        'last_name',
        'first_name',
        'gender',
        'birthday',
        'date_hired',
        'salary'
    ];

    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class, 'department_id   ');
    }

    public function projects(): BelongsToMany
    {
        return $this->belongsToMany(Project::class, 'employee_projects', 'employee_id', 'project_id');
    }
}
