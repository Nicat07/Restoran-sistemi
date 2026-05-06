<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Meal;

class MealSeeder extends Seeder
{
    public function run(): void
    {
        Meal::create(['name' => 'Lülə Kabab', 'price' => 12.00, 'category' => 'Yemək', 'description' => 'Quzu əti']);
        Meal::create(['name' => 'Ayran', 'price' => 2.00, 'category' => 'İçki', 'description' => 'Ev üsulu']);
        Meal::create(['name' => 'Paytaxt Salatı', 'price' => 6.50, 'category' => 'Salat', 'description' => 'Təzə tərəvəzlər']);
    }
}
