
@extends('layouts.app')

@section('title', 'User List')

@section('content')

<div class="card">
    <div class="card-header">Add User</div>

    <div class="card-body w-50">
        <form action="{{ route('users.store') }}" id="myForm" method="post">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">User Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <button type="submit" id="submitBtn" class="btn btn-success">Add User</button>
        </form>
    </div>


</div>

@endsection

