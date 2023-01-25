<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kholis extends Model
{
    use SoftDeletes;

    protected $table = 'kholis';
    protected $fillable = [
        'nama',
        'alamat'
    ];

    protected $hidden;

}
