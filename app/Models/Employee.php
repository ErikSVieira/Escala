<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'nickname',
        'position_id',
        'birth_date',
        'position_date',
        'image',
        'ddd',
        'phone',
        'description',
        'active'
    ];

    public function position()
    {
        return $this->belongsTo(Position::class);
    }
}
