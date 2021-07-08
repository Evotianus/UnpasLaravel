@extends('layout/main')

@section('title', 'Daftar Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <h1 class="mt-3">Daftar Mahasiswa</h1>

        <a href="/students/create"><button class="btn btn-primary my-3">Tambah Data Mahasiswa</button></a>

        <ul class="list-group col-6">
        @if(session('status'))
        <div class="alert alert-success">
          {{ session('status') }}
        </div>
        @endif

            @foreach($students as $x)
            <li class="list-group-item d-flex justify-content-between align-items-center">
              {{ $x->nama }}
              
              <a href="/students/{{ $x->id }}" class="btn btn-info">Detail</a>
            </li>
            @endforeach
          </ul>
    </div>
</div>
@endsection