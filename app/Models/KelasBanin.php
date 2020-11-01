<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelasBanin extends Model
{
    use HasFactory;

    protected $table = 'kelas_banin';

    public function kelassantribanin() {
        return $this->hasMany('App\Models\KelasSantriBanin');
    }
}
