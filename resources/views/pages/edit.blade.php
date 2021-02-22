@extends('template.main')

@section('content')
    <div class="container mt-5">
        <div>
            <h1>Edit</h1>
        </div>

        <form action="/update-people/{{$edit->id}}">
            @csrf
            <div class="form-group">
                <label for="studentName">Name : </label>
                <input type="text" name="name" id="studentName" value="{{$edit->name}}">
            </div>
            <div class="form-group">
                <label for="studentAge">Age : </label>
                <input type="number" name="Age" id="studentAge" value="{{$edit->age}}">
            </div>
            <div class="form-group">
                <label for="studentEmail">Email : </label>
                <input type="text" name="Email" id="studentEmail" value="{{$edit->email}}">
            </div>
            <div class="form-group">
                <label for="studentPhone">Phone : </label>
                <input type="number" name="Phone" id="studentPhone" value="{{$edit->phone}}">
            </div>

            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
@endsection