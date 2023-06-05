<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'position_id',
        'birth_date',
        'position_date'
        // name
        // position_id
        // birth_date
        // position_date
        // photo
        // ddd
        // phone
        // description
    ];

    public function position()
    {
        return $this->belongsTo(Position::class);
    }
}
