<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class avarage extends Model
{
    protected $fillable = [
        'college_name',
        'section',
        'avarage',
        'sex'
];
    use HasFactory;
}
