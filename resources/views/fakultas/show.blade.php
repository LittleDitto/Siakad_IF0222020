<!-- resources/views/fakultas/show.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Detail Fakultas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2>Detail Fakultas: {{ $fakulta->nama_fakultas }}</h2>
    <p>Pimpinan: {{ $fakulta->nama_pimpinan }}</p>

    <h3>Program Studi</h3>
    <ul>
        @foreach($prodis as $programstudi)
            <li>{{ $programstudi->nama_prodi }}</li>
        @endforeach
    </ul>

    <a href="{{ route('fakultas.index') }}" class="btn btn-primary">Kembali ke Daftar Fakultas</a>
</div>
</body>
</html>
