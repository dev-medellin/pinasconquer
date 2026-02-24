<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class VpsItemService
{
    public function getItemsByEntityId($entityId)
    {
        return Cache::remember("items_{$entityId}", 10, function () use ($entityId) {

            $response = Http::timeout(5)
                ->retry(2, 200)
                ->withHeaders([
                    'Authorization' => 'Bearer '.config('services.vps.secret'),
                ])
                ->get(config('services.vps.items_url'), [
                    'entityId' => $entityId
                ]);

            if (!$response->successful()) {
                return [];
            }

            return $response->json() ?? [];
        });
    }
}