<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeePeriod extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'company_id',
        'division_id',
        'level_id',
        'gender_id',
        'period'
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }

    public function division()
    {
        return $this->belongsTo(Division::class, 'division_id');
    }

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }

    public function gender()
    {
        return $this->belongsTo(Gender::class, 'gender_id');
    }

    public function level()
    {
        return $this->belongsTo(Level::class, 'level_id');
    }
}
