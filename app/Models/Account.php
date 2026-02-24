<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Support\Conquer;
use Carbon\Carbon;

class Account extends Authenticatable
{
    use Notifiable;

    protected $table = 'accounts';

    public $timestamps = false;

    protected $primaryKey = 'username';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'username',
        'Password',
        'email',
        'IP',
        // any other fields
    ];

    protected $hidden = ['Password', 'remember_token'];

    /*
    |--------------------------------------------------------------------------
    | AUTO TRANSLATED ATTRIBUTES
    |--------------------------------------------------------------------------
    */

    public function getClassNameAttribute()
    {
        return Conquer::className($this->class);
    }

    public function getMapNameAttribute()
    {
        return Conquer::mapName($this->map);
    }

    public function getGuildRankNameAttribute()
    {
        return Conquer::guildRank($this->guildRank);
    }

     /*
    |--------------------------------------------------------------------------
    | WINDOWS TICKS → DATE CONVERTER
    |--------------------------------------------------------------------------
    */

    private function ticksToDate($ticks)
    {
        if (!$ticks || $ticks <= 0) {
            return null;
        }

        $unixTimestamp = ($ticks - 621355968000000000) / 10000000;

        return Carbon::createFromTimestamp($unixTimestamp);
    }

    public function getVipTimeDateAttribute()
    {
        return $this->ticksToDate($this->vipTime);
    }

    public function getNobilityExpireDateAttribute()
    {
        return $this->ticksToDate($this->nobilityExpire);
    }

    public function getLastLoginDateAttribute()
    {
        return $this->ticksToDate($this->lastLoginClient);
    }
}