<?php
namespace Database\Factories;


use App\Models\Order;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class OrderFactory extends Factory
{
    protected $model = Order::class;

    public function definition()
    {
        $user = User::inRandomOrder()->firstOrFail();
        
        // Ensure that an Employee exists before trying to retrieve its id
        $employee = Employee::inRandomOrder()->first();
        if (!$employee) {
            $employee = Employee::factory()->create(); // Create a new Employee if none exists
        }

        return [
            'user_id' => $user->id,
            'employee_id' => $employee->id,
            'total_amount' => $this->faker->randomFloat(2, 10, 1000),
            // Add other attributes as needed
        ];
    }
}
