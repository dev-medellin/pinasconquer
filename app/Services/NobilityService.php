<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class NobilityService
{
    public function getTopNobility()
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.config('services.vps.secret'),
        ])->get(config('services.vps.nobility_url'));

        if (!$response->successful()) {
            return [];
        }

        return $response->json();
    }
}