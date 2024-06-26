<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utm extends Model
{
    use HasFactory;
    protected $table = 'utms';
    protected $fillable = [
        'balance',
        'top_up',
        'rating',
        'account',
        'query',
        'user_id'
    ];

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
