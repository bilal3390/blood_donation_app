@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="mb-4">Blood Donors</h1>
            <a href="/donors/create" class="btn btn-primary mb-3">Add Donor</a>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="row">
                @foreach($donors as $donor)
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5 class="card-title">{{ $donor->f_name }} {{ $donor->l_name }}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Blood Group: {{ $donor->blood_group }}</h6>
                                <p class="card-text">
                                    <strong>Age:</strong> {{ $donor->age }}<br>
                                    <strong>Gender:</strong> {{ $donor->gender }}<br>
                                    <strong>Contact:</strong> {{ $donor->contact }}<br>
                                </p>
                                <a href="/donors/{{ $donor->id }}" class="btn btn-primary">View Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
