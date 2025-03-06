    @extends('layouts.app')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Welcome</div>

                    <div class="card-body">
                        <h2>Welcome to My Laravel Application</h2>
                        <p>This is the homepage of our application.</p>
                        
                        <div class="mt-4">
                            <a href="{{ route('signup') }}" class="btn btn-primary">Sign Up</a>
                            <a href="#" class="btn btn-outline-secondary ml-2">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection