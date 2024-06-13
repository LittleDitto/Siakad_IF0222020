@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Data Program Studi</p>
    <table>
        <thead>
            <tr>
                <th>Kode Prodi</th>
                <th>Nama Studi</th>
                <th>Kode Fakultas</th>
            </tr>
        </thead>
        <center>
        <tbody>
            @foreach ($prodi as $items)
            <th>{{$items->kode_prodi}}</th>
            <th>{{$items->nama_prodi}}</th>
            <th>{{$items->kode_fakultas}}</th>
                
            @endforeach
        </tbody>
        </center>        
    </table>
    
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop