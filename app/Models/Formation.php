<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ["start_date","end_date","title","institution","city","country"];
}
