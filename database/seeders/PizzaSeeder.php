<?php

namespace Database\Seeders;

use App\Models\pizza;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PizzaSeeder extends Seeder
{


    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        pizza::query()->insert([
            [
                'name' => 'Veggie Delight',
                'image' => 'https://images.unsplash.com/photo-1513104890138-7c749659a591?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8dHlwZXMlMjBvZiUyMHBpenphfGVufDB8fDB8fHww',
                'price' => '10.99',
                'description' => 'A delicious veggie burger made with fresh vegetables and served with a side of sweet potato fries.',
                'is_veg' => 0
            ],
            [
                'name' => 'Chicken Fajita',
                'image' => 'https://images.unsplash.com/photo-1534308983496-4fabb1a015ee?q=80&w=2076&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'price' => '12.99',
                'description' => 'Sizzling chicken fajita with sautéed onions, bell peppers, and served with warm flour tortillas.',
                'is_veg' => 1
            ],
            [
                'name' => 'Veggie Wrap',
                'image' => 'https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fHR5cGVzJTIwb2YlMjBwaXp6YXxlbnwwfHwwfHx8MA%3D%3D',
                'price' => '8.99',
                'description' => 'A flavorful veggie wrap filled with hummus, cucumber, tomato, and mixed greens.',
                'is_veg' => 0
            ],
            [
                'name' => 'Beef Tacos',
                'image' => 'https://images.unsplash.com/photo-1593504049359-74330189a345?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fHR5cGVzJTIwb2YlMjBwaXp6YXxlbnwwfHwwfHx8MA%3D%3D',
                'price' => '11.99',
                'description' => 'Soft shell tacos filled with seasoned ground beef, topped with lettuce, cheese, and tomatoes.',
                'is_veg' => 1
            ],
            [
                'name' => 'Quinoa Salad Bowl',
                'image' => 'https://images.unsplash.com/photo-1623855245544-fa477b4d9e3e?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8c2FsYWRzfGVufDB8fDB8fHww',
                'price' => '9.99',
                'description' => 'A hearty quinoa salad bowl with roasted vegetables, mixed greens, and a citrus vinaigrette.',
                'is_veg' => 0
            ],
            [
                'name' => 'Veg Salad Bowl',
                'image' => 'https://images.unsplash.com/photo-1662192513841-c890cc6ff3f9?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fHNhbGFkc3xlbnwwfHwwfHx8MA%3D%3D',
                'price' => '12.99',
                'description' => 'A hearty quinoa salad bowl with roasted vegetables, mixed greens, and a citrus vinaigrette.',
                'is_veg' => 0
            ]
        ]);
    }
}
