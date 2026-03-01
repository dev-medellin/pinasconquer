<?php

namespace App\Support;

class Conquer
{
    /*
    |--------------------------------------------------------------------------
    | CLASS TRANSLATOR
    |--------------------------------------------------------------------------
    */

    public static function className(int $id): string
    {
        return match (true) {
            self::isTrojan($id)  => 'Trojan',
            self::isWarrior($id) => 'Warrior',
            self::isArcher($id)  => 'Archer',
            self::isNinja($id)   => 'Ninja',
            self::isMonk($id)    => 'Monk',
            self::isPirate($id)  => 'Pirate',
            self::isWater($id)   => 'Water Taoist',
            self::isFire($id)    => 'Fire Taoist',
            self::isTaoist($id)  => 'Taoist',
            default              => 'Unknown',
        };
    }

    /*
    |--------------------------------------------------------------------------
    | GENDER (Official Conquer Rule)
    | 1000–1999 = Male
    | 2000–2999 = Female
    |--------------------------------------------------------------------------
    */

    public static function isFemale(int $body): bool
    {
        return $body >= 2000;
    }

    public static function isMale(int $body): bool
    {
        return $body < 2000;
    }

    /*
    |--------------------------------------------------------------------------
    | NOBILITY TITLE (Position-Based)
    |--------------------------------------------------------------------------
    */

    public static function nobilityTitle(int $position, int $body): ?string
    {
        $isFemale = self::isFemale($body);

        return match (true) {
            $position <= 3  => $isFemale ? 'Queen' : 'King',
            $position <= 20 => $isFemale ? 'Princess' : 'Prince',
            $position <= 59 => 'Duke',
            default         => null,
        };
    }

    /*
    |--------------------------------------------------------------------------
    | JOB TYPE CHECKERS
    |--------------------------------------------------------------------------
    */

    public static function isTrojan(int $job): bool { return $job >= 10 && $job <= 15; }
    public static function isWarrior(int $job): bool { return $job >= 20 && $job <= 25; }
    public static function isArcher(int $job): bool { return $job >= 40 && $job <= 45; }
    public static function isNinja(int $job): bool { return $job >= 50 && $job <= 55; }
    public static function isMonk(int $job): bool { return $job >= 60 && $job <= 65; }
    public static function isPirate(int $job): bool { return $job >= 70 && $job <= 75; }
    public static function isWater(int $job): bool { return $job >= 132 && $job <= 135; }
    public static function isFire(int $job): bool { return $job >= 142 && $job <= 145; }
    public static function isTaoist(int $job): bool { return $job >= 100 && $job <= 145; }

    /*
    |--------------------------------------------------------------------------
    | MAP TRANSLATOR
    |--------------------------------------------------------------------------
    */

    public static function mapName(int $id): string
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

    public static function guildRank(int $id): string
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