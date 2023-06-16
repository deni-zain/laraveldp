<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers;

class post extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
}