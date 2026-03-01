@props(['item'])

@php
use App\Support\ConquerItems;
use App\Support\ConquerUI;

$itemInfo = ConquerItems::get($item['itemId']);
$itemName = $itemInfo['name'] ?? 'Unknown Item';
$itemDesc = $itemInfo['description'] ?? '';
@endphp


<div class="relative w-16 h-16 bg-black border-2 {{ ConquerUI::itemQualityBorder($item['itemId']) }} rounded group cursor-pointer">

    {{-- ITEM ICON --}}
    <img
        src="{{ asset('items/'.$item['itemId'].'.png') }}"
        class="absolute inset-0 m-auto w-12 h-12
        @if(($item['plus'] ?? 0) >= 12) animate-pulse @endif">

    {{-- PLUS --}}
    @if(($item['plus'] ?? 0) > 0)
    <span class="absolute top-0 right-0 text-yellow-400 text-xs font-bold">
        +{{ $item['plus'] }}
    </span>
    @endif

    {{-- TOOLTIP --}}
    <div class="hidden group-hover:block absolute z-50 left-16 top-0 w-56 bg-black border border-yellow-500 text-xs p-3 shadow-lg">

        <div class="font-bold">
            {{ $itemName }}
        </div>

        @if($itemDesc)
        <div class="text-gray-400 mt-1">
            {{ $itemDesc }}
        </div>
        @endif

        <div>
            Durability:
            {{ $item['durability'] ?? 0 }}/{{ $item['maxDurability'] ?? 0 }}
        </div>

    </div>

</div>