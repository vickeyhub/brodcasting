<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmegencyNotification extends Model
{
    use HasFactory;

    protected $fillable = [
        'title','description','duration'
    ];
}
