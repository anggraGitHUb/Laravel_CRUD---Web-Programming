@extends('main')

@section('title','Form Create Student')

@section('container')
<div class="container">
    <h1>Hello, Create Students</h1>
    
    <form method="POST" action="/students">
    @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Please insert your name</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="your name" value="{{ old('nama') }}">
                @error('nama')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="nip" class="form-label">Please insert your NIP</label>
                <input type="text" class="form-control @error('nip') is-invalid @enderror" id="nip" name="nip" placeholder="your NIP" value="{{ old('nip') }}">
                @error('nip')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Please insert your email</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="your email" value="{{ old('email') }}">
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">Please insert your mayor</label>
                <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" name="jurusan" placeholder="your mayor" value="{{ old('jurusan') }}">
                @error('jurusan')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
                        
            <button type="submit" class="btn btn-primary">Create</button>
    </form>   


</div>

@endsection