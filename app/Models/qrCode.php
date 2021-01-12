<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class qrCode extends Model
{
    use HasFactory;

    protected $fillable = ['play_list_id', 'song_id', 'qrCode'];

    public function playList() :BelongsTo
    {
        return $this->belongsTo('App\Models\PlayList', 'play_list_id', 'id');
    }

    public function song() :BelongsTo
    {
        return $this->belongsTo('App\Models\Song', 'song_id', 'id');
    }
}