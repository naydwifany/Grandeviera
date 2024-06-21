<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Buyer extends Authenticatable
{
    use HasFactory, Notifiable;

    // Nama tabel di database
    protected $table = 'buyer';

    // Primary key dari tabel
    protected $primaryKey = 'idBuyer';

    // Atribut yang dapat diisi secara massal
    protected $fillable = [
        'usernameBuyer', 
        'emailBuyer', 
        'passwordBuyer'
    ];

    // Atribut yang harus disembunyikan untuk array
    protected $hidden = [
        'passwordBuyer', 
        'remember_token',
    ];

    // Mengganti default timestamps
    public $timestamps = true;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = null; // jika tabel tidak memiliki kolom 'updated_at', atau ubah sesuai dengan kolom yang ada
}