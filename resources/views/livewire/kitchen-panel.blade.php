<div class="mt-10 p-6 bg-gray-800 text-white rounded-lg">
    <h2 class="text-2xl font-bold mb-4 border-b pb-2">👨‍🍳 Mətbəx Paneli (Sifariş İdarəetməsi)</h2>

    <div class="grid grid-cols-1 gap-4">
        @foreach($orders as $order)
            <div class="bg-gray-700 p-4 rounded flex justify-between items-center">
                <div>
                    <span class="font-mono text-sm text-gray-400">#{{ $order->id }}</span>
                    <h3 class="text-lg font-bold">{{ $order->total_amount }} AZN</h3>

                    <!-- PHP if/else ilə status rənglərini təyin edirik -->
                    <span class="px-2 py-1 rounded text-xs font-bold 
                        {{ $order->status == 'hazırlanır' ? 'bg-orange-500' : 'bg-green-500' }}">
                        {{ strtoupper($order->status) }}
                    </span>
                </div>

                <div class="space-x-2">
                    @if($order->status == 'hazırlanır')
                        <button wire:click="updateStatus({{ $order->id }}, 'göndərildi')" 
                                class="bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded text-sm">
                            Yola sal 🚚
                        </button>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</div>
