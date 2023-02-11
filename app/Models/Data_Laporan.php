<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Carbon;


class Data extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attribute['created_at'])
            ->translatedFormat('l, d F Y');
    }
}
