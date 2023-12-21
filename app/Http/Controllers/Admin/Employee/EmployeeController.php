<?php

namespace App\Http\Controllers\Admin\Employee;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Employee\StoreEmployeeRequest;
use App\Http\Requests\Admin\Employee\UpdateEmployeeRequest;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('Admin.Employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.Employees.add_employee');
    }

    /**
     * Store a newly created resource in storage.
     */public function store(StoreEmployeeRequest $request)
    {
        $employeeData = $request->validated();
        Employee::create($employeeData);

        return redirect()->route('employees.index')->with('success', 'Employee added successfully.');
    }
    public function edit(Employee $employee)
    {
        return view('admin.Employees.edit_employee', compact('employee'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        $employeeData = $request->validated();
        $employee->update($employeeData);

        return redirect()->route('employees.index')->with('success', 'Employee updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
       
        $employee->delete();

        return redirect()->route('employees.index')->with('delete', 'Employee deleted successfully');
    }
}
