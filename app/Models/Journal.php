<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    use HasFactory;
    protected $table = 'journal';
    protected $primaryKey = 'journalID';
    public $timestamps = false;

    public function article()
    {
        return $this->hasMany(Article::class, 'issueJournalID', 'journalID');
    }
}
