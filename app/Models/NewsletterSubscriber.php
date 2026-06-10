<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class NewsletterSubscriber extends Model
{
    protected $table = 'newsletter_subscribers';

    protected $fillable = [
        'email', 'nom', 'statut',
        'token_desabonnement', 'desabonne_le',
    ];

    protected static function boot(): void
    {
        parent::boot();
        static::creating(function ($subscriber) {
            if (empty($subscriber->token_desabonnement)) {
                $subscriber->token_desabonnement = Str::random(64);
            }
        });
    }
}