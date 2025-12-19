<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function pesana_detail()
    {
        return $this->belongsTo('App\PesananDetail', 'pesanan_id', 'id');
    }
}
