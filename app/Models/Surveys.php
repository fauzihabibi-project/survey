<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Surveys extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'client_name',
        'rating',
        'message',
        'source',
        'ip_address',
    ];

    // Relasi: survey milik satu karyawan

    public function employee()
    {
        return $this->belongsTo(Employees::class);
    }
}
