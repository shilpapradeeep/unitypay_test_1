@extends('layouts.app')

@section('title', 'Company List')

@section('content')
    <div class="card">
        <div class="card-header">User List</div>
        <div class="card-body">
            <div class="text-center mb-2">
                <a class="btn btn-success" href="{{ route('users.add') }}">Add User</a>
            </div>
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <table class="table table-bordered table-hover">
                <thead>
                    <tr class="bg-dark text-white">
                        <th>ID</th>
                        <th>Name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>




@endsection
