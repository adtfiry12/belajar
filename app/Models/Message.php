<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Prunable;

class Message extends Model
{
    protected $table = 'messages';
    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
        'ip_address'
    ];

    use Prunable;

    public function prunable()
    {
        return static::where('created_at', '<=', now()->subDays(7));
    }
}
