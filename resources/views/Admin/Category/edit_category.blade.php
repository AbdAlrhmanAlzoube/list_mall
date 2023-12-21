@extends('Admin.admin_dashboard')

@section('content')
    
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Add Category</h4>
            <p class="card-description">
                Edit the details of the category
            </p>
            <form method="POST" action="{{ route('categories.update', $category->id) }}">
                @csrf
                @method('PUT') 
                <div class="form-group">
                    <label for="exampleInputName1">Name</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="name" value="{{ $category->name }}">
                </div>
               
                <button type="submit" class="btn btn-primary mr-2">Update</button>
                <a href="{{ route('categories.index') }}" class="btn btn-light">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection
