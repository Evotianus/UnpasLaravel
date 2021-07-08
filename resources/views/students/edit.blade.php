@extends('layout/main')

@section('title', 'Ubah Data Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <h1 class="mt-3">Ubah Data Mahasiswa</h1>

        <form method="POST" action="/students/{{ $student->id }}">
            @method('patch')
            @csrf
            <div class="mb-3">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan nama" name="nama" value="{{ $student->nama }}">
              @error('nama')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="nrp" class="form-label">NRP</label>
              <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" placeholder="Masukkan NRP" name="nrp" value="{{ $student->nrp }}">
              @error('nrp')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan Email" name="email" value="{{ $student->email }}">
              @error('email')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="jurusan" class="form-label">Jurusan</label>
              <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" placeholder="Masukkan Jurusan" name="jurusan" value="{{ $student->jurusan }}">
              @error('jurusan')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary mt-3">Ubah Data</button>
        </form>
    </div>
</div>
@endsection