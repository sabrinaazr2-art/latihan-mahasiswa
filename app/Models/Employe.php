<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    // Definisikan nama tabel
    protected $table = 'employes';

    // Definisikan primary key
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'nama',
        'alamat',
        'gender',
        'gaji',
    ];
}
