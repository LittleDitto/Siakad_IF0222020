@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="container mt-5">
    <h2>Edit Program Studi</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('programstudis.update', $programstudi->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="kode_prodi">Kode Prodi:</label>
            <input type="text" class="form-control" id="kode_prodi" name="kode_prodi" value="{{ $programstudi->kode_prodi }}">
        </div>
        <div class="form-group">
            <label for="nama_prodi">Nama Prodi:</label>
            <input type="text" class="form-control" id="nama_prodi" name="nama_prodi" value="{{ $programstudi->nama_prodi }}">
        </div>
        <div class="form-group">
            <label for="fakultas_id">Fakultas:</label>
            <select class="form-control" id="fakultas_id" name="fakultas_id">
                @foreach($fakultas as $f)
                    <option value="{{ $f->id }}" {{ $f->id == $programstudi->fakultas_id ? 'selected' : '' }}>{{ $f->nama_fakultas }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Perbarui</button>
    </form>
</div>
@stop

@section('css')
    <!-- {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}} -->
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop