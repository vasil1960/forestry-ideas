<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instruction extends Model
{
    use HasFactory;
    protected $table = 'instr_to_autors';
    protected $primaryKey = 'instrID';
    public $timestamps = false;
}
