<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salah extends Model
{
    use HasFactory;
    protected $fillable = ['fojor','juhor','asor','magrib','esha','tahajjud'];
}
