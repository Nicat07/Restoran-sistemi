<?php
namespace App\Livewire;

use Livewire\Component;
use App\Models\Order;

class AdminStats extends Component
{
    public function render()
    {
        $totalRevenue = Order::where('status', 'göndərildi')->sum('total_amount');
        $orderCount = Order::count();
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

