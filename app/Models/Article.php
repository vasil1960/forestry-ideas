<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $table = 'issue';
    protected $primaryKey = 'issueID';

    public $timestamps = false;

    public function journal()
    {
        return $this->belongsTo(Journal::class, 'issueJournalID', 'journalID');
    }
}
