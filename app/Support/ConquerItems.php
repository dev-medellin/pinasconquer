<?php

namespace App\Support;

class ConquerItems
{
    protected static $items = null;

    protected static function load()
    {
        if (self::$items !== null) {
            return;
        }

        self::$items = [];

        $path = storage_path('conquer/itemtype.txt');

        if (!file_exists($path)) {
            return;
        }

        $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        foreach ($lines as $line) {

            // Skip comments or empty
            if (trim($line) == '') continue;

            // ⭐ Split using @@
            $parts = explode('@@', $line);

            if (count($parts) < 2) continue;

            $itemId = (int)$parts[0];
            $name   = $parts[1];

            // description usually near end
            $description = $parts[count($parts)-5] ?? '';

            self::$items[$itemId] = [
                'name' => $name,
                'description' => str_replace('~',' ', $description)
            ];
        }
    }

    public static function get($itemId)
    {
        self::load();

        return self::$items[$itemId] ?? null;
    }
}