<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table="pegawais"; 
     public $timestamps= false; 
     protected $primaryKey = 'nip';
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = [
     'nip',
     'nama',
     'alamat',
     'jabatan',
     'gaji_pokok',
     ];
}
