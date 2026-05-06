<?php
namespace App\Livewire;

use Livewire\Component;
use App\Models\Order;

class AdminStats extends Component
{
    public function render()
    {
        // 1. Toplama əməli (SQL SUM vasitəsilə)
        $totalRevenue = Order::where('status', 'göndərildi')->sum('total_amount');

        // 2. Sayma əməli
        $orderCount = Order::count();

        // 3. Bölmə əməli (Ortalama hesab hesablama)
        // if istifadə edirik ki, 0-a bölmə xətası olmasın
        $averageOrder = $orderCount > 0 ? $totalRevenue / $orderCount : 0;

        return view('livewire.admin-stats', [
            'totalRevenue' => $totalRevenue,
            'orderCount' => $orderCount,
            'averageOrder' => $averageOrder
        ]);
    }

    #[On('order-created')]
    public function updateList() {}
}

