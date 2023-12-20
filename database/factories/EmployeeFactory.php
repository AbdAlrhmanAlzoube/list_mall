<?php


namespace Database\Factories;

use App\Models\Employee;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    protected $model = Employee::class;

    public function definition()
    {
        return [
            'employee_number' => $this->faker->unique()->randomNumber(),
            'image' => $this->faker->imageUrl(),
            'user_id'=> User::inRandomOrder()->first()->id,

        ];
    }
}
