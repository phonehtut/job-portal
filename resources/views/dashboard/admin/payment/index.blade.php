@extends('dashboard.layout.admin')
@section('content')
    <div class="flex justify-between items-center mb-4">
        <h3>Payments</h3>
    </div>

    <div class="overflow-x-auto">
        <table class="table table-xs">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Received At</th>
                    <th>Image</th>
                    <th>Transaction Number</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($payments as $payment)
                    <tr>
                        <th>{{ $payment->id }}</th>
                        <td>{{ $payment->name }}</td>
                        <td>Sample Image</td>
                        <td>{{ $payment->transaction_number }}</td>
                        <td>{{ $payment->created_at }}</td>
                        <td>
                            <form action="{{ url('admin/payments/' . $payment->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('payments.edit', $payment->id) }}" class="btn btn-sm btn-accent"
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
