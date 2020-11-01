<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSantri extends Model
{
    use HasFactory;

    protected $table = 'data_santri';

    public function kelas_santri_banin() {
        return $this->hasMany('App\Models\KelasSantriBanin');
    }
}
