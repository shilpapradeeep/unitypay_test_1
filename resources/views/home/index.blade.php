
@extends('layouts.app')

@section('title', 'User List')

@section('content')

<h1 class="mt-5">Coding Test</h1>

<div class="card mb-2 border-dark">

    <div class="card-header border-dark"><b>Instructions</b></div>
    <div class="card-body">
        <ol>
            <li>You can only use Laravel Eloquent relationships / queries.</li>
            <li>Should write migrations to create database tables.</li>
            <li>Should Validate inputs.</li>
            <li>Please follow all the coding and naming standards.</li>
            <li>Regularly Commit in Git as you progress.</li>
            <li>Mail us your Forked git repository link after you complete it.</li>
        </ol>
    </div>
</div>

<div class="card border-dark">

    <div class="card-header border-dark"><b>Todo in Companies Page</b></div>
    <div class="card-body">
        <ol>
            <li>Fill the <b>"Total Users" column </b> with the Count of Users assigned to that Company. <b>Git Commit here.</b></li>

            <li>Complete <b>"Edit" button functionality </b> in Companies page <b>Git Commit here.</b></li>

            <li>
                <b>Complete "Add User to Company" </b> button functionality. <b>Git Commit here.</b>
            </li>
            <ul>
                <li>
                    <b>Write Migration & Model</b> to add Users to Companies. <br>
                </li>
                <li><b>Please note:</b> Multiple users can have multiple companies assigned to them.</li>
                <li>
                    This page would <b> show a list of all Users in checkboxes.</b> <br>
                    We should be able to check / uncheck any number of Users and click "Add Users to Company" <br>
                    <b> Checkout the example UI below:</b>
                </li>
                <li>
                    <div class="card w-50 border-dark">
                        <div class="card-header bg-light border-dark">Example: Add Users to Company 1</div>
                            <div class="card-body">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="checkbox1" checked>
                                    <label class="form-check-label" for="checkbox1">
                                        User 1
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="checkbox2">
                                    <label class="form-check-label" for="checkbox2">
                                        User 2
                                    </label>
                                </div>
                                <div>
                                    <button class="btn btn-primary btn-sm mt-2">Add Users to Company</button>
                                </div>
                            </div>
                    </div>
                </li>
            </ul>
        </ol>
    </div>
</div>

</div>


@endsection
