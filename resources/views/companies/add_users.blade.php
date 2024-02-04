
@extends('layouts.app')

@section('title', 'Add User to Company')

@section('content')


    <div class="card w-50 border-dark">
        <div class="card-header bg-light border-dark">Add Users to {{ $company->name }}</div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('companies.add_users', $company->id) }}" method="post">
                    @csrf
                    @foreach ($users as $user)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="users[]" value="{{ $user->id; }}" id="checkbox{{ $user->id; }}" {{ $company->users->contains('id', $user->id) ? 'checked' : '' }}>
                        <label class="form-check-label" for="checkbox{{ $user->id }}">
                        {{ $user->name }}
                        </label>
                    </div>
                    @endforeach
                    <div>
                        <button class="btn btn-primary btn-sm mt-2">Add Users to Company</button>
                    </div>
                </form>  
            </div>
        </div>
    </div>

@endsection