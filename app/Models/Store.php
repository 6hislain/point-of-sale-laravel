<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use Uuid, HasFactory;

    protected $keyType = 'string';
    public $incrementing = false;
}
