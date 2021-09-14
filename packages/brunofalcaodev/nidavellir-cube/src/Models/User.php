<?php

namespace Nidavellir\Cube\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use KuCoin\SDK\PrivateApi\Order;
use Nidavellir\Cube\Models\Alert;
use Nidavellir\Cube\Models\Api;
use Nidavellir\Cube\Models\Exchange;
use Nidavellir\Database\Factories\UserFactory;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email_verified_at',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function apis()
    {
        return $this->hasMany(Api::class);
    }

    protected static function newFactory()
    {
        return UserFactory::new();
    }
}
