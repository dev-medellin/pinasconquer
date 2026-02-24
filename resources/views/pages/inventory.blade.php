{{-- <section class="min-h-screen bg-gray-950 py-16 px-6">

<div class="max-w-6xl mx-auto">

<h1 class="text-3xl font-bold text-yellow-400 mb-8">
{{ $user->name }} Inventory
</h1>

<div class="grid grid-cols-4 md:grid-cols-6 lg:grid-cols-8 gap-4">

@forelse(($items ?? []) as $item)

<div class="relative bg-gray-900 border border-yellow-500/20 rounded-lg p-3 text-center hover:border-yellow-400 transition">

    <img src="{{ asset('items/'.$item['itemId'].'.png') }}"
         class="w-12 h-12 mx-auto">

    @if($item['plus'] > 0)
        <div class="absolute top-1 right-1 text-xs text-yellow-400 font-bold">
            +{{ $item['plus'] }}
        </div>
    @endif

    <div class="text-xs text-gray-400 mt-1">
        {{ $item['durability'] }}/{{ $item['maxDurability'] }}
    </div>

    @if($item['bless'] > 0)
        <div class="text-xs text-green-400">
            Bless {{ $item['bless'] }}%
        </div>
    @endif

    @if($item['socketOne'] > 0 || $item['socketTwo'] > 0)
        <div class="text-xs text-blue-400">
            Sockets
        </div>
    @endif

</div>

@empty

<p class="text-gray-400 col-span-full text-center">
No items found.
</p>

@endforelse

</div>

</div>

</section> --}}