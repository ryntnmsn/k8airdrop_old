<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{   
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'question_id' => 'array',
        ];

    public function promos() {
        return $this->belongsToMany(Promo::class, 'participant_promo');
    }

    public function choices() {
        return $this->belongsToMany(Choice::class, 'participant_choice');
    }

    // public function questions() {
    //     return $this->belongsToMany(Question::class, 'participant_choice');
    // }

    
}
