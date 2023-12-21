@extends('Admin.admin_dashboard')

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Edit Product</h4>
            <p class="card-description">
                Update the details of the product
            </p>
            <form method="POST" action="{{ route('products.update', $product->id) }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="productName">Product Name</label>
                    <input type="text" class="form-control" id="productName" placeholder="Product Name" name="name" value="{{ $product->name }}">
                </div>

                <div class="form-group">
                    <label for="productDescription">Product Description</label>
                    <textarea class="form-control" id="productDescription" placeholder="Product Description" name="description">{{ $product->description }}</textarea>
                </div>

                <div class="form-group">
                    <label for="productPrice">Product Price</label>
                    <input type="number" class="form-control" id="productPrice" placeholder="Product Price" name="price" value="{{ $product->price }}">
                </div>

                <div class="form-group">
                    <label for="productCategory">Category</label>
                    <select class="form-control" id="productCategory" name="category_id">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
               
                <button type="submit" class="btn btn-primary mr-2">Update Product</button>
                <a href="{{ route('products.index') }}" class="btn btn-light">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection
