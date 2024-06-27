<!-- resources/views/fakultas/create.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Fakultas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2>Tambah Fakultas</h2>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('fakultas.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama_fakultas">Nama Fakultas:</label>
            <input type="text" class="form-control" id="nama_fakultas" name="nama_fakultas" required>
        </div>
        <div class="form-group">
            <label for="nama_pimpinan">Nama Pimpinan:</label>
            <input type="text" class="form-control" id="nama_pimpinan" name="nama_pimpinan" required>
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>
</body>
</html>
