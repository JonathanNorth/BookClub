<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Round extends Model
{
    use HasFactory;

    protected $fillable = [
        'judge_id',
        'genre',
        'pick_date',
        'winning_suggestion'
    ];


    public function judge(): BelongsTo{
        return $this->belongsTo(User::class,'judge_id');
    }

    public function books(): HasMany 
    {
        return $this->hasMany(Book::class);
    }

    public function suggestions(): HasMany
    {
        return $this->hasMany(Suggestion::class);
    }
    public function winningSuggestion()
    {
        return $this->belongsTo(Suggestion::class, 'winning_suggestion');
    }
 
}
