<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingRecord extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'date',
        'exercise',
        'sets',
        'weight',
        'memo',
    ];

    protected $casts = [
        'date',
    ];


    public function user()
    {
        return $this->belongTo(User::class);
    }
}

