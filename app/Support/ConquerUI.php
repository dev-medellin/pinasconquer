<?php

namespace App\Support;

class ConquerUI
{
    public static function itemQualityBorder($itemId)
    {
        $quality = $itemId % 10;

        return match($quality) {
            9 => 'border-purple-500', // Super
            8 => 'border-yellow-400', // Elite
            7 => 'border-blue-400',   // Unique
            6 => 'border-green-400',  // Refined
            default => 'border-gray-600'
        };
    }

    public static function itemQualityColor($itemId)
    {
        $quality = $itemId % 10;

        return match($quality) {
            9 => 'text-purple-400',
            8 => 'text-yellow-400',
            7 => 'text-blue-400',
            6 => 'text-green-400',
            default => 'text-gray-300'
        };
    }
}