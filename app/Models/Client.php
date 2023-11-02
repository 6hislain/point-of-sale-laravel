<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'contact',
        'image',
        'description',
    ];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function store(): BelongsTo {
        return $this->belongsTo(Store::class);
    }

    public function transactions(): HasMany {
        return $this->hasMany(Transaction::class);
    }
}
