<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Purchase extends Model
{
    use Uuid, HasFactory;

    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'quantity',
        'group',
        'total',
        'expiration_date',
        'description',
        'user_id',
        'client_id',
        'product_id',
    ];

    protected $casts = [
        'expiration_date' => 'date',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }
}
