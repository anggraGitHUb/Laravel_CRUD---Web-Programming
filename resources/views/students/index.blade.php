@extends('main')

@section('title','List Student')

@section('container')
<div class="container">
    <h1>Hello, List Students</h1>

    <a href="/students/create" class="btn btn-primary">Create Student</a>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status')}}
        </div>
    @endif
    
    
    <ul class="list-group">
    @foreach( $students as $students)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            {{ $students->nama }}
            <a href="/students/{{ $students->id }}" class="badge bg-primary rounded-pill">detail</a>
        </li>
    @endforeach
    </ul>
   


</div>

@endsection