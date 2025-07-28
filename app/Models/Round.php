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
        'genre',
        'pick_date'
    ];


    public function judge(): BelongsTo{
        return $this->belongsTo(User::class,'judge_id');
    }

    public function books(): HasMany 
    {
        return $this->hasMany(Book::class);
    }
 
}
