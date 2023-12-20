<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeeTableSeeder extends Seeder
{
    public function run()
    {
        Employee::factory(10)->create();
    }
}
