<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employees extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'position',
        'photo',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    
    // Relasi: 1 karyawan punya banyak survey

    public function surveys()
    {
        return $this->hasMany(Surveys::class);
    }
}
