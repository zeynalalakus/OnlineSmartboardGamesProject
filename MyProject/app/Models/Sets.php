<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sets extends Model
{
    use HasFactory;
    protected $fillable = [
        'SetName',
        'created_by',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

}
