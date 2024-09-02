<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens,
        HasFactory,
        Notifiable,
        HasRoles,
        SoftDeletes;


    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function favorites(): BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }

    public function addresses(): HasMany
    {
        return $this->hasMany(UserAddress::class);
    }

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }

    public function hasFavorite($favorite_id): bool
    {
        return $this->favorites()->where('product_id', $favorite_id)->exists();
    }

    public function rating(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function settings(): HasMany
    {
        return $this->hasMany(UserSetting::class, 'user_id', 'id');
    }

    public function paymentCards(): HasMany
    {
        return $this->hasMany(UserPaymentCards::class);
    }

    public  function chats(): HasMany
    {
        return $this->hasMany(Message::class);
    }
    public function photos(): MorphMany
    {
        return $this->morphMany(Photo::class, 'photoable');
    }
}
