<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
// User.php Model Update
protected $fillable = [
    'nip',
    'nama_lengkap',
    'alamat_tinggal',
    'no_hp',
    'no_ktp',
    'no_karpeg',
    'email',
    'acc_on',  // Updated field
];

protected $hidden = [
    'acc_on',  // Updated field
    'remember_token',
];

protected function casts(): array
{
    return [
        'email_verified_at' => 'datetime',
        'acc_on' => 'hashed',  // Updated field
    ];
}

}
