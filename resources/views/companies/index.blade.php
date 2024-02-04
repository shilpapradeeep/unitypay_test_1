@extends('layouts.app')

@section('title', 'Company List')

@section('content')

<div class="card">

    <div class="card-header">Company List</div>
    <div class="card-body">

        <div class="text-center mb-2">
            <a class="btn btn-success" href="{{ route('companies.add') }}">Add Company</a>
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
                    <th>Total Users</th>
                    <th>Edit</th>
                    <th>Add Users to Company</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($companies as $company)
                    <tr>
                        <td>{{ $company->id }}</td>
                        <td>{{ $company->name }}</td>
                        <td>{{ $company->users->count(); }}</td><!-- total users in company -->
                        <td>
                            <a href="{{ route('companies.edit', $company->id) }}" class="btn btn-warning">Edit</a>
                        </td>
                        <td>
                            <a href="{{ route('companies.show_users', $company->id) }}" type="submit" class="btn btn-primary">+ Add Users</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>


@endsection
