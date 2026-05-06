<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <!-- Menyu Hissəsi -->
    <div class="md:col-span-2 space-y-4">
        @foreach($meals as $meal)
            <div class="bg-white p-4 rounded shadow flex justify-between items-center">
                <div>
                    <h3 class="font-bold text-lg">{{ $meal->name }}</h3>
                    <p class="text-gray-500 text-sm">{{ $meal->price }} AZN</p>
                </div>
                <button
                    wire:click="addToCart({{ $meal->id }}, {{ $meal->price }})"
                    class="bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-600 transition">
                    + Səbətə at
                </button>
            </div>
        @endforeach
    </div>

    <!-- Səbət Paneli -->
    <div class="bg-white p-6 rounded shadow h-fit">
        <h2 class="text-2xl font-bold mb-4">🛒 Səbətiniz</h2>
        <ul class="mb-4 text-gray-700">
            @foreach($cartItems as $item)
                <li class="border-b py-1">• {{ $item }}</li>
            @endforeach
        </ul>
        <hr class="my-2">
        <div class="text-xl font-bold text-green-600">
            Cəmi: {{ number_format(floatval($cartTotal ?: 0), 2, '.', '') }} AZN
        </div>
        @if($cartTotal > 0)
            <button wire:click="placeOrder" class="w-full mt-4 bg-green-500 text-white py-2 rounded font-bold">
                Sifarişi Tamamla
            </button>
        @endif
    </div>
</div>
