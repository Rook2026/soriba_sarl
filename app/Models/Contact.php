<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'email',
        'organisation', 'secteur', 'message',
        'statut', 'notes_internes',
        'ip_address', 'user_agent',
    ];
}