@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h2>{{ $donor->f_name }} {{ $donor->l_name }}</h2>
                </div>
                <div class="card-body">
                    <p><strong>Email:</strong> {{ $donor->email }}</p>
                    <p><strong>Age:</strong> {{ $donor->age }}</p>
                    <p><strong>Blood Group:</strong> {{ $donor->blood_group }}</p>
                    <p><strong>Gender:</strong> {{ $donor->gender }}</p>
                    <p><strong>Contact:</strong> {{ $donor->contact }}</p>
                    <p><strong>Email:</strong> {{ $donor->email }}</p>
                    <p><strong>Address:</strong> {{ $donor->address }}</p>
                </div>
                <div class="card-footer">
                    <a href="/" class="btn btn-primary">Back to Listings</a>
                </div>
            </div>
        </div>
    </div>
@endsection
