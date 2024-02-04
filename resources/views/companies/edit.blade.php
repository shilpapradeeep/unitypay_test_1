
@extends('layouts.app')

@section('title', 'Edit Company')

@section('content')

<div class="card">

    <div class="card-header">Edit Company</div>

    <div class="card-body w-50">
        <form action="{{ route('companies.update') }}" id="myForm" method="post">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            @csrf
            <input type="hidden" name="company_id" id="company_id" value="{{ $company->id }}" />
            <div class="mb-3">
                <label for="name" class="form-label">Company Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $company->name }}">
            </div>
            <button type="submit" id="submitBtn" class="btn btn-success">Edit Company</button>
        </form>
    </div>

</div>

@endsection