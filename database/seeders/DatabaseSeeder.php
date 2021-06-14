<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // Dummy User Create
        \App\Models\User::create([
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('Password')
        ]);

        \App\Models\User::create([
            'name' => 'user',
            'email' => 'user@mail.com',
            'password' => bcrypt('Password')
        ]);

        // Dummy Product Create
        \App\Models\Product::create([
            'name' => 'mac wallpaper',
            'price' => 500,
            'description' => 'Dolores platea hendrerit commodo',
            'image' => 'defult.jpg'
        ]);
        \App\Models\Product::create([
            'name' => 'mac image',
            'price' => 400,
            'description' => 'Dolores platea hendrerit commodo',
            'image' => 'defult.jpg'
        ]);
        \App\Models\Product::create([
            'name' => 'Ubuntu Wallpaper',
            'price' => 600,
            'description' => 'Dolores platea hendrerit commodo',
            'image' => 'defult.jpg'
        ]);
        // Dummy Order
        \App\Models\Order::create([
            'user_id' => 1,
            'date' => Carbon::now(),
            'address' => '4AB Street 22 London UK',
            'status' => 1
        ]);
        \App\Models\Order::create([
            'user_id' => 2,
            'date' => Carbon::now(),
            'address' => '4AB Street 22 London UK',
            'status' => 0
        ]);
        // Dummy Items Order
        \App\Models\OrderItems::create([
            'order_id' => 1,
            'product_id' => 1,
            'quantity' => 2,
            'price' => 4000
        ]);
        \App\Models\OrderItems::create([
            'order_id' => 2,
            'product_id' => 1,
            'quantity' => 3,
            'price' => 4000
        ]);
    }
}
