<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Order;

class KitchenPanel extends Component
{
    public function updateStatus($orderId, $newStatus)
    {
        $order = Order::find($orderId);
        $order->status = $newStatus;
        $order->save();
    }

    public function render()
    {
        return view('livewire.kitchen-panel', [
            'orders' => Order::orderBy('created_at', 'desc')->get()
        ]);
    }

    #[On('order-created')]
    public function updateList() {}
}
