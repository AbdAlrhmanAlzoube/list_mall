<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    protected $model = Order::class;

    public function definition(): array
    {
        $orderItem = OrderItem::inRandomOrder()->first();

        return [
            'total_amount' => $this->faker->randomFloat(2, 10, 100),
        ];
    }
}
