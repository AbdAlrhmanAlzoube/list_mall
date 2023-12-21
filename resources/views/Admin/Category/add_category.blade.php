@extends('Admin.admin_dashboard')

@section('content')
    
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
          
            <h4 class="card-title">Add Category</h4>
            <p class="card-description">
                Enter the details for the new category
            </p>
            <form method="POST" action="{{ route('categories.store') }}">
                @csrf
                <div class="form-group">
                    <label for="exampleInputName1">Name</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="name" value="{{ old('name') }}">
                </div>
               
                <button type="submit" class="btn btn-primary mr-2">Add Category</button>
                <a href="{{ route('categories.index') }}" class="btn btn-light">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection
