<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Data extends Model
{
    use HasFactory;

    protected $table = 'data_laporan';
    protected $guarded = [];

    public function getTanggalAttribute()
    {
        return Carbon::parse($this->attribute['tanggal'])
            ->translatedFormat('l, d F Y');
    }
    public $timestamps = false;
}
