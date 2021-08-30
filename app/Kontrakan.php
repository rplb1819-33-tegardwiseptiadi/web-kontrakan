<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kontrakan extends Model
{
    protected $table = 'rents';
    protected $fillable = ['nama_kontrakan', 'tipe_kontrakan', 'kapasitas_kontrakan', 'harga_kontrakan', 'foto_kontrakan', 'status_kontrakan','alamat_kontrakan']; 
}
