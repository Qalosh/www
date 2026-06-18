<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactRequest extends Model
{
    protected $table = 'requests';
    
    protected $fillable = [
        'name',
        'phone',
        'email',
        'message',
        'status',
    ];
}