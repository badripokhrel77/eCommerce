@extends('layouts.admin')
@section('title', 'Add Product')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <h2 class="text-center mb-4">Add Product</h2>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Image Upload -->
                    <div class="mb-3">
                        <label for="productImage" class="form-label">Upload Image</label>
                        <input type="file" class="form-control" id="productImage" name="image" required>
                    </div>
                    <!-- Fruit Name -->
                    <div class="mb-3">
                        <label for="fruitName" class="form-label">Fruit Name</label>
                        <input type="text" class="form-control" id="fruitName" name="name"
                            placeholder="Enter fruit name" required>
                    </div>
                    <!-- Price -->
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" class="form-control" id="price" name="price" placeholder="Enter price"
                            min="0" step="0.01" required>
                    </div>
                    <!-- Submit Button -->
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Add Product</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
