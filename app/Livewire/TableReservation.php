<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Reservation;
use Carbon\Carbon; // Laravel-in vaxtla işləyən aləti

class TableReservation extends Component
{
    public $table_number, $reservation_time, $customer_name;
    public $message = '';

    public function reserve()
    {
        // 1. Keçmiş vaxtı seçməyə qoymayaq (PHP If məntiqi)
        if (Carbon::parse($this->reservation_time)->isPast()) {
            $this->message = "Xəta: Keçmiş zamana rezervasiya etmək olmaz!";
            return;
        }

        // 2. Masanın həmin vaxtda dolu olub-olmadığını yoxlayaq
        $exists = Reservation::where('table_number', $this->table_number)
            ->where('reservation_time', $this->reservation_time)
            ->exists();

        if ($exists) {
            $this->message = "Bu masa həmin saat üçün artıq doludur!";
        } else {
            Reservation::create([
                'table_number' => $this->table_number,
                'reservation_time' => $this->reservation_time,
                'customer_name' => $this->customer_name
            ]);
            $this->message = "Masa #{$this->table_number} uğurla rezerv olundu!";
        }
    }

    public function render()
    {
        return view('livewire.table-reservation', [
            'reservations' => Reservation::orderBy('reservation_time', 'asc')->get()
        ]);
    }
}

