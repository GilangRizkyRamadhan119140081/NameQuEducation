<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Users extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'role_id',
        'name',
        'email',
        'password',
        'google_id',
        'tanggal_lahir',
        'referal_id',
        'referal_code',
        'referal_from',
        'nomor_hp',
        'alamat',
        'image',
        'kode_voucher',
        'kode_paket',
        'expired',
        'device_number',
        'remember_firebase',
        'remember_token',
        'profile',
        'note',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'tanggal_lahir' => 'date',
        'expired' => 'date',
    ];

    /**
     * Define relationship to roles (if applicable).
     */
    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }

    /**
     * Define relationship to users as referrer (optional).
     */
    public function referrer()
    {
        return $this->belongsTo(User::class, 'referal_id');
    }
}
