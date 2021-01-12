<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Song extends Model
{
    use HasFactory;

    protected $fillable = ['type', 'artist', 'url', 'title', 'description', 'play_list_id', 'duration'];

    public function playList() :BelongsTo
    {
        return $this->belongsTo('App\Models\PlayList', 'play_list_id', 'id');
    }
}