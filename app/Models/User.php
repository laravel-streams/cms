<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Streams\Core\Support\Traits\Streams;
use Streams\Core\Entry\Contract\EntryInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements EntryInterface
{
    use HasFactory, Notifiable, Streams;

    protected $stream = 'users';

    protected $guarded = [
        'password',
    ];

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
