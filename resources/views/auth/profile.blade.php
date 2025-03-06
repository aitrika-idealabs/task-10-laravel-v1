@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Your Profile</div>

                <div class="card-body">
                    <h2>Welcome, {{ $user->name }}!</h2>
                    
                    <div class="mb-3">
                        <strong>Name:</strong> {{ $user->name }}
                    </div>
                    
                    <div class="mb-3">
                        <strong>Email:</strong> {{ $user->email }}
                    </div>
                    
                    <div class="mb-3">
                        <strong>Account Created:</strong> {{ $user->created_at->format('F d, Y') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection