@extends('layouts.admin')
@section('title', 'Add Product')
@section('content')
<div class="card mt-5">
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <div class="card-header d-flex justify-content-between align-items-center">
       
        <div class="w-100 text-center">
            <h4>PRODUCTS</h4>
        </div>
        <a href="{{ url('admin/product/create') }}" class="btn btn-primary" id="addButton"><i class="fas fa-plus"></i></a>
    </div>
    <div class="card-body">
        {{-- @if($notices->isEmpty())
            <p class="text-center text-muted">No notices found. Click "Add Notice" to create a new notice.</p>
        @else --}}
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">S.N</th>
                        <th scope="col">Name</th>
                        <th scope="col">Image</th>
                        <th scope="col">Price</th>
                        
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach($notices as $index => $notice)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $notice->title }}</td>
                            <td>
                                <img src="{{ $notice->image ? asset('storage/' . $notice->image) : 'https://via.placeholder.com/80' }}" alt="Notice Image" class="img-thumbnail" style="max-width: 80px;">
                            </td>
                            <td>{{ \Carbon\Carbon::parse($notice->published_date)->format('M d, Y') }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($notice->description, 40, '...') }}</td>
                            <td>
                                <a href="{{ url('admin/notice/' . $notice->id ) }}" class="btn btn-sm btn-secondary "><i class="fas fa-eye"></i></a>
                                <a href="{{ url('admin/notice/' . $notice->id . '/edit') }}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                <form action="{{ url('admin/notice/' . $notice->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this notice?');"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach --}}
                </tbody>
            </table>
        {{-- @endif --}}
    </div>
</div>
@endsection
