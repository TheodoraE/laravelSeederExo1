@extends('template.main')

@section('content')
    <div class="container mt-5">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h6 class="card-title">{{$show->id}}</h6>
                <h5 class="card-title">{{$show->name}}</h5>
                <h5 class="card-title">{{$show->age}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{$show->email}}</h6>
                <h6 class="card-subtitle mb-2 text-muted">{{$show->phone}}</h6>
                <p class="card-text">{{$show->age}}</p>
                <a href="/" class="btn btn-primary">Go Back</a>
            </div>
        </div>
    </div>
@endsection