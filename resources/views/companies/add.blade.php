
@extends('layouts.app')

@section('title', 'Add Company')

@section('content')

<div class="card">

    <div class="card-header">Add Company</div>

    <div class="card-body w-50">
        <form action="{{ route('companies.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Company Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <button type="submit" class="btn btn-success">Add Company</button>
        </form>
    </div>

</div>

@endsection

