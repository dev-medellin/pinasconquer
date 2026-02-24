<?php

namespace App\Support;

class Conquer
{
    /*
    |--------------------------------------------------------------------------
    | CLASS TRANSLATOR
    |--------------------------------------------------------------------------
    */

    public static function className($id)
    {
        $classes = [
            10 => 'Trojan',
            20 => 'Warrior',
            40 => 'Archer',
            50 => 'Ninja',
            60 => 'Monk',
            70 => 'Pirate',
            80 => 'Dragon Warrior',
            100 => 'Taoist',
            101 => 'Fire Taoist',
            102 => 'Water Taoist',
            135 => 'Windwalker',
            15 => 'Trojan', // adjust based on your server
        ];

        return $classes[$id] ?? 'Unknown';
    }

    /*
    |--------------------------------------------------------------------------
    | MAP TRANSLATOR
    |--------------------------------------------------------------------------
    */

    public static function mapName($id)
    {
        $maps = [
            1002 => 'Twin City',
            1011 => 'Phoenix Castle',
            1020 => 'Desert City',
            1015 => 'Bird Island',
            1036 => 'Market',
            1000 => 'Jail',
        ];

        return $maps[$id] ?? 'Unknown Map';
    }

    /*
    |--------------------------------------------------------------------------
    | GUILD RANK TRANSLATOR
    |--------------------------------------------------------------------------
    */

    public static function guildRank($id)
    {
        $ranks = [
            0 => 'None',
            1 => 'Member',
            2 => 'Deputy Leader',
            3 => 'Leader',
        ];

        return $ranks[$id] ?? 'Unknown';
    }
}