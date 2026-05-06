<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Meal;

class MenuComponent extends Component
{
    public $cartTotal = 0;
    public $cartItems = [];

    public function addToCart($mealId, $price)
    {

        $this->cartTotal += $price;

        $meal = Meal::find($mealId);
        $this->cartItems[] = $meal->name;
    }

    public function render()
    {
        return view('livewire.menu-component', [
            'meals' => Meal::all()
        ]);
    }

    public function placeOrder()
    {
        if ($this->cartTotal > 0) {
            \App\Models\Order::create([
                'total_amount' => $this->cartTotal,
                'status' => 'hazırlanır'
            ]);

            $this->cartTotal = 0;
            $this->cartTotal = [];
            $this->dispatch('order-created');

            session()->flash('message', 'Sifariş mətbəxə göndərildi!');
        }
    }
}

