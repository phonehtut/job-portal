@extends('dashboard.layout.admin')
@section('content')
    <div class="overflow-x-auto">
        <table class="table table-xs">
            <thead>
                <tr>
                    <th></th>
                    <th>Name</th>
                    <th>Job</th>
                    <th>Category</th>
                    <th>CV Form</th>
                    <th>Applied_at</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>1</th>
                    <td>Cy Ganderton</td>
                    <td>Canada</td>
                    <td></td>
                    <td>hi</td>
                    <td>12/16/2020</td>
                    <td>
                        <a href="" class="btn btn-xs btn-accent">Accept</a>
                        <a href="" class="btn btn-xs btn-error">Reject</a>
                    </td>
                </tr>

                </tfoot>
        </table>
    </div>
@endsection
