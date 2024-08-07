<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cursos extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'nombre',
        'description',
        'category',
    ];
}
