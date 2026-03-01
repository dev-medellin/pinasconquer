<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use App\Support\Conquer;

class RankController extends Controller
{
    public function index()
    {
        $base = config('services.vps.rank_url');
        $secret = config('services.vps.secret');

        $response = Http::get($base.'?key='.$secret)->json();
        $value = response()->json($response)->getData(true);
        $users = $response['data'] ?? [];

        $players = collect($value)
            ->sortByDesc('Level')
            ->values()
            ->map(function ($player) {
                $player['className'] = \App\Support\Conquer::className($player['Class']);
                return $player;
            });
        $cps = collect($value)
            ->sortByDesc('ConquerPoints')
            ->values()
            ->map(function ($player) {
                $player['className'] = Conquer::className($player['Class']);
                return $player;
            });

        $golds = collect($value)
            ->sortByDesc('Money')
            ->values()
            ->map(function ($player) {
                $player['className'] = Conquer::className($player['Class']);
                return $player;
            });

        $nobility = collect($value)
            ->where('DonationNobility', '>', 10000) // ✅ filter first
            ->sortByDesc('DonationNobility')
            ->take(59)
            ->values()
            ->map(function ($player, $index) {

                $position = $index + 1;
                $isFemale = Conquer::isFemale($player['Body']);

                $player['rankPosition'] = $position;
                $player['nobilityTitle'] = Conquer::nobilityTitle($position, $isFemale);
                $player['className'] = Conquer::className($player['Class']);

                return $player;
            });

        return view('pages.rank', compact(
            'players',
            'cps',
            'golds',
            'nobility'
        ));
    }
}