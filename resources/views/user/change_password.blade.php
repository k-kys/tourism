@extends('master')

@push('title', 'Change Password')

@section('content')
<div class="container">
    <form action="{{ url('/user/update-password') }}" method="post">
        @csrf

        <!-- Validate error message -->
        @if (session('errors'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <ul>
                @foreach ($errors as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Password"
                aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="newPassword">New password</label>
            <input type="password" name="new_password" id="newPassword" class="form-control" placeholder="New Password"
                aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="renewPassword">ReNew password</label>
            <input type="password" name="re_new_password" id="renewPassword" class="form-control"
                placeholder="ReNew Password" aria-describedby="helpId">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
