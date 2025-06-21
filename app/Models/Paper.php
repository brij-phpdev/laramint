<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Paper extends Model
{
    use HasFactory;
    
    protected $guarded = [];

//    public function Department(): BelongsTo
//    {
//        return $this->belongsTo(Department::class);
//    }

    public function Course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }

    public function Terms(): HasMany
    {
        return $this->hasMany(Term::class);
    }
}
