<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumne extends Model
{
    use HasFactory;

    protected $table = 'alumnes';

    protected $fillable = [
        'name',
        'surname',
        'rol',
        'email'
    ];

    protected $hidden = [];
}
