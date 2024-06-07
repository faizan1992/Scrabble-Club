<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'join_date', 'contact_details'];

    public function scores()
    {
        return $this->hasMany(Score::class);
    }

     public function scopeTopScoring($query, $limit = 10)
    {
        return $query->with('scores')
            ->get()
            ->sortByDesc(function ($member) {
                return $member->scores->avg('score');
            })
            ->take($limit);
    }
}
