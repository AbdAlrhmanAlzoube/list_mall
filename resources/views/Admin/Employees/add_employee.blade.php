{{-- resources/views/admin/Employees/add_employee.blade.php --}}

@extends('Admin.admin_dashboard')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add Employee</div>

                    <div class="card-body">
                        {{-- Add your form here --}}
                        <form action="{{ route('employees.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            {{-- Add your form fields based on the StoreEmployeeRequest --}}

                            <div class="form-group">
                                <label for="employee_number">Employee Number:</label>
                                <input type="text" name="employee_number" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="image">Image:</label>
                                <input type="file" name="image" class="form-control" accept="image/*" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Add Employee</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
