@extends('dashboard.layout.admin')
@section('content')
    <div class="flex justify-between items-center mb-4">
        <h3>Categories</h3>
        <a href="{{ route('categories.create') }}" class="btn btn-success btn-sm"><i class="fa-solid fa-plus"></i> Create
            Category</a>
    </div>

    <div class="overflow-x-auto">
        <table class="table table-xs">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <th>{{ $category->id }}</th>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->created_at }}</td>
                        <td>
                            <form action="{{ url('admin/categories/' . $category->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-sm btn-accent"
                                    title="edit">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </a>

                                <button type="submit" class="btn btn-sm btn-error" title="delete"
                                    onclick="return confirm('Are you sure you want to delete?')">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
