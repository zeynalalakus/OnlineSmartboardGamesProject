<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    use HasFactory;

    protected $fillable = [
        'SetName',
        'c1n',
        'c2n',
        'c3n',
        'c4n',
        'c5n',
        'c6n',
        'c1q1',
        'c1q2',
        'c1q3',
        'c1q4',
        'c1q5',
        'c2q1',
        'c2q2',
        'c2q3',
        'c2q4',
        'c2q5',
        'c3q1',
        'c3q2',
        'c3q3',
        'c3q4',
        'c3q5',
        'c4q1',
        'c4q2',
        'c4q3',
        'c4q4',
        'c4q5',
        'c5q1',
        'c5q2',
        'c5q3',
        'c5q4',
        'c5q5',
        'c6q1',
        'c6q2',
        'c6q3',
        'c6q4',
        'c6q5',
    ];
}
