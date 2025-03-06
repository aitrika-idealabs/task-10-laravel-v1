@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if(session('user'))
                        <h3>Welcome, {{ session('user')['name'] }}!</h3>
                        <p>Email: {{ session('user')['email'] }}</p>
                    @else
                        <p>No user data found. Please sign up again.</p>
                    @endif
                    <a href="{{ route('home') }}" class="btn btn-secondary mt-3">Go Home</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
