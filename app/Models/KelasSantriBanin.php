<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelasSantriBanin extends Model
{
    use HasFactory;

    protected $table = 'kelas_santri_banin';

    public function data_santri() {
        return $this->belongsTo('App\Models\DataSantri');
    }

    public function kelas_banin() {
        return $this->belongsTo('App\Models\KelasBanin');
    }

}
