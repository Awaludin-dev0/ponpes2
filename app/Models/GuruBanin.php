<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuruBanin extends Model
{
    use HasFactory;

    protected $table = 'guru_banin';

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function kelas_banin()
    {
        return $this->belongsTo('App\Models\KelasBanin');
    }
}
