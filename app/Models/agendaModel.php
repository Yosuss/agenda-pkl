<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class agendaModel extends Model
{
    //
    protected $table = 'agenda'; // Nama tabel
    protected $primaryKey = 'id_agenda'; // Primary key

    protected $fillable = [
        'tanggal',
        'kegiatan',
    ];

}