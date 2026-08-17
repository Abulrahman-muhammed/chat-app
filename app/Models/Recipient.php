<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Recipient extends Pivot
{
    protected $table = 'recipient';

    protected $casts = [
        'last_read_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function message()
    {
        return $this->belongsTo(Message::class);
    }
}
