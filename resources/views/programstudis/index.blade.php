@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <!-- <h1>Dashboard</h1> -->
@stop

@section('content')
<div class="container mt-5">
    <h2>Daftar Program Studi</h2>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('programstudis.create') }}" class="btn btn-primary mb-4">Tambah Program Studi</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Kode Prodi</th>
                <th>Nama Prodi</th>
                <th>Kode Fakultas</th>
                <th>Fakultas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($programstudis as $programstudi)
            <tr>
                <td>{{ $programstudi->kode_prodi }}</td>
                <td>{{ $programstudi->nama_prodi }}</td>
                <td>{{ $programstudi->kode_fakultas }}</td>
                <td>{{ $programstudi->fakultas->nama_fakultas }}</td>
                <td>
                    <a href="{{ route('programstudis.show', $programstudi->id) }}" class="btn btn-info">Lihat</a>
                    <a href="{{ route('programstudis.edit', $programstudi->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('programstudis.destroy', $programstudi->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus program studi ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop