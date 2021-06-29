@extends('main')

@section('title','Show Student')

@section('container')
<div class="container">
    <h1>Hello, Show Students</h1>
    
    <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $student->nama }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $student->nip }}</h6>
                <p class="card-text">{{ $student->email }}</p>
                <p class="card-text">{{ $student->jurusan }}</p>
                
                <button type="submit" class="btn btn-primary">Update</button>
                <button type="submit" class="btn btn-danger">Delete</button>

                <a href="/students" class="card-link">Back</a>
            </div>
    </div>
   


</div>

@endsection