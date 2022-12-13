@extends('layouts.error')

@section('content')
    <div class="error-page container">
        <div class="col-md-8 col-12 offset-md-2">
            <div class="text-center">
                <img class="img-error" src="{{ asset('images/samples/error-404.svg') }}" alt="Not Found" />
                <h1 class="error-title">NOT FOUND</h1>
                <p class="fs-5 text-gray-600">
                    The page you are looking not found.
                </p>
                <a href="{{ url('/') }}" class="btn btn-lg btn-outline-primary mt-3">Go Home</a>
            </div>
        </div>
    </div>
@stop
