<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class VpsUserService
{
    public function getUserByEntityId($entityId)
    {
        // Cache key per user
        $cacheKey = "vps_user_{$entityId}";

        // Cache for 10 seconds (adjust if needed)
        return Cache::remember($cacheKey, 10, function () use ($entityId) {

            $response = Http::timeout(5)
                ->retry(2, 200)
                ->withHeaders([
                    'Authorization' => 'Bearer '.config('services.vps.secret'),
                ])
                ->get(config('services.vps.url'), [
                    'entityId' => $entityId
                ]);

            if (!$response->successful()) {
                return null;
            }

            return $response->json();
        });
    }
}