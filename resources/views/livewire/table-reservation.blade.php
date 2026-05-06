<div class="mt-10 p-6 bg-white rounded-lg shadow">
    <h2 class="text-2xl font-bold mb-4 text-gray-800">🪑 Masa Rezervasiyası</h2>

    @if($message)
        <div class="p-3 mb-4 rounded {{ str_contains($message, 'Xəta') ? 'bg-red-100 text-red-700' : 'bg-green-100 text-green-700' }}">
            {{ $message }}
        </div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
        <input type="text" wire:model="customer_name" placeholder="Adınız" class="border p-2 rounded">
        <select wire:model="table_number" class="border p-2 rounded">
            <option value="">Masa seçin</option>
            <option value="1">Masa 1 (Pəncərə kənarı)</option>
            <option value="2">Masa 2 (VİP)</option>
            <option value="3">Masa 3 (Həyət)</option>
        </select>
        <input type="datetime-local" wire:model="reservation_time" class="border p-2 rounded">
    </div>
    
    <button wire:click="reserve" class="w-full bg-indigo-600 text-white py-2 rounded font-bold hover:bg-indigo-700">
        Rezerv et
    </button>

    <h3 class="mt-8 font-bold border-b pb-2">📅 Rezervasiya Siyahısı</h3>
    <ul class="mt-4">
        @foreach($reservations as $res)
            <li class="p-2 border-b text-sm">
                <strong>Masa #{{ $res->table_number }}</strong> - {{ $res->customer_name }} 
                <span class="text-gray-500">({{ \Carbon\Carbon::parse($res->reservation_time)->format('d.m.Y H:i') }})</span>
            </li>
        @endforeach
    </ul>
</div>
