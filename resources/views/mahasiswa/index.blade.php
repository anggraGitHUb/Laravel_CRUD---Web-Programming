@extends('main')

@section('title','List Student')

@section('container')
<div class="container">
    <h1>Hello, Daftar Mahasiswa</h1>
    

    <table class="table">
  <thead class="table-dark">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">NIP</th>
        <th scope="col">Email</th>
        <th scope="col">Jurusan</th>
        <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach( $mahasiswa as $mhs)
    <tr>
        <th scope="col">{{ $loop->iteration }}</th>
        <td>{{ $mhs->nama }}</td>
        <td>{{ $mhs->nip }}</td>
        <td>{{ $mhs->email }}</td>
        <td>{{ $mhs->jurusan }}</td>
        <td>
            <a href="" class="btn badge-success">edit</a>
            <a href="" class="btn badge-danger">hapus</a>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>


</div>

@endsection