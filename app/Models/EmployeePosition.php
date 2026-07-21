<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EmployeePosition extends Model
{
    protected $table = 'employee_positions';
    protected $guarded = [];

    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class, 'position_id');
    }
}