<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employee extends Model
{
    protected $table = 'employees'; 

    protected $fillable = [
        'position_id',
        'user_id',
        'dni',
        'first_name',
        'last_name',
        'phone',
        'email',
        'address',
        'birth_date',
        'salary',
        'status',
    ];

        public function position(): BelongsTo
    {
        return $this->belongsTo(EmployeePosition::class, 'position_id');
    }

    public function puesto(): BelongsTo
    {
        return $this->belongsTo(EmployeePosition::class, 'position_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}