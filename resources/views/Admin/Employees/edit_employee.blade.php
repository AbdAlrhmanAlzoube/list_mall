{{-- resources/views/admin/Employees/edit_employee.blade.php --}}

@extends('Admin.admin_dashboard') {{-- Assuming you have a master layout --}}

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Employee</div>

                    <div class="card-body">
                        {{-- Add your form here --}}
                        <form action="{{ route('employees.update', $employee->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT') {{-- Use the PUT method for update --}}
                            {{-- Add your form fields based on the UpdateEmployeeRequest --}}
                            
                            <div class="form-group">
                                <label for="employee_number">Employee Number:</label>
                                <input type="text" name="employee_number" class="form-control" value="{{ $employee->employee_number }}" required>
                            </div>

                            <div class="form-group">
                                <label for="image">Image:</label>
                                <input type="file" name="image" class="form-control" accept="image/*">
                                @if($employee->image)
                                    <img src="{{ asset($employee->image) }}" alt="Employee Image" class="mt-2" style="max-width: 200px;">
                                @endif
                            </div>

                            <button type="submit" class="btn btn-primary">Update Employee</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
