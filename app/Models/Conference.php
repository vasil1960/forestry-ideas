<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conference extends Model
{
    use HasFactory;

    public $table = 'conferences';
    protected $primaryKey = 'confID';
    public $timestamps = false;
}
