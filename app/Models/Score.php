<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;

    protected $fillable = ['game_id', 'member_id', 'score'];

    public function member()
    {
        return $this->belongsTo(Member::class);
    }

    public function game()
    {
        return $this->belongsTo(Game::class);
    }
}
