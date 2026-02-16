<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = 'abouts';
    protected $fillable = [
        'name',
        'no_telp',
        'photo',
        'email',
        'alamat',
        'study',
        'role',
        'desc',
        'title',
        'linkedin',
        'github',
        'instagram',
        'facebook'
    ];
}
