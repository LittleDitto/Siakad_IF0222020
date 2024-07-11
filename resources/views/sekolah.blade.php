@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <!-- <h1>Data Sekolah</h1> -->
@stop

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Data Sekolah di Indonesia</h1>
        <button id="fetchData" class="btn btn-primary mb-4">Fetch Data Sekolah</button>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Sekolah</th>
                    <th>Alamat</th>
                    <th>Kecamatan</th>
                    <th>Kabupaten</th>
                    <th>Provinsi</th>
                </tr>
            </thead>
            <tbody id="sekolahData">
            </tbody>
        </table>
    </div>
@stop

@section('css')
    <!-- {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}} -->
@stop

@section('js')
    <script>
        document.addEventListener('DOMContentLoaded', 
        function() {
            fetch('/fetch-sekolah')
                .then(response => response.json())
                .then(data => {
                    let sekolahData = document.getElementById('sekolahData');
                    sekolahData.innerHTML = '';
                    data.dataSekolah.forEach((sekolah, index) => {
                        sekolahData.innerHTML += `
                            <tr>
                                <td>${index + 1}</td>
                                <td>${sekolah.sekolah}</td>
                                <td>${sekolah.alamat_jalan}</td>
                                <td>${sekolah.kecamatan}</td>
                                <td>${sekolah.kabupaten_kota}</td>
                                <td>${sekolah.propinsi}</td>
                            </tr>
                         `;
                    });
                });
        });
    </script>
@stop
