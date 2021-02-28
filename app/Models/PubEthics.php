<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PubEthics extends Model
{
    use HasFactory;
    public $table = 'pub_ethics';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
