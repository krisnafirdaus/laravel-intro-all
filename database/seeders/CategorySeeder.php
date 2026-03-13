<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $electronics = Category::create([
            'name' => 'Electronics',
            'slug' => 'electronics',
            'description' => 'Electronic devices and gadgets',
            'icon' => 'fa-solid fa-tv',
            'is_active' => true
        ]);

        $electronics->products()->createMany([
            [
                'name' => 'Smartphone',
                'description' => 'Latest model smartphone with advanced features',
                'price' => 699.99,
                'stock' => 50,
                'is_active' => true
            ],
            [
                'name' => 'Laptop',
                'description' => 'High-performance laptop for work and gaming',
                'price' => 1299.99,
                'stock' => 30,
                'is_active' => true
            ]
        ]);
    }
}