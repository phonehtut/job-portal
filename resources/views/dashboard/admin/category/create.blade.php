@extends('dashboard.layout.admin')
@section('content')
    <div class="flex justify-between items-center mb-4">
        <h3>Categories</h3>
        <a href="{{ route('categories.index') }}" class="btn btn-success btn-sm"><i
                class="fa-solid fa-arrow-right-from-bracket"></i> Back</a>
    </div>

    <div class="overflow-x-auto bg-white p-6 shadow-md rounded-lg">
        <form action="{{ route('categories.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Category Name</label>
                <input type="text" id="name" name="name"
                    class="input input-bordered w-full p-3 text-gray-700 border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                    placeholder="Enter category name" required>
            </div>

            <div class="flex justify-end">
                <a href="{{ route('categories.index') }}" class="btn btn-outline btn-sm mr-2">Cancel</a>
                <button type="submit" class="btn btn-success btn-sm"><i class="fa-solid fa-plus"></i> Create
                    Category</button>
            </div>
        </form>
    </div>
@endsection
