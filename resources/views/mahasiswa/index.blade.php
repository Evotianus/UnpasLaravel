@extends('layout/main')

@section('title', 'Daftar Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <h1 class="mt-3">Daftar Mahasiswa</h1>

        <table class="table">
            <thead class="table-secondary">
                <tr>
                    <td scope="col">#</td>
                    <td scope="col">Nama</td>
                    <td scope="col">NRP</td>
                    <td scope="col">Email</td>
                    <td scope="col">Jurusan</td>
                    <td scope="col">Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach($mahasiswa as $x)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $x->nama }}</td>
                    <td>{{ $x->nrp }}</td>
                    <td>{{ $x->email }}</td>
                    <td>{{ $x->jurusan }}</td>
                    <td>
                        <button class="btn btn-success">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection