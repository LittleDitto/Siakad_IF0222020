<!-- resources/views/fakultas/edit.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Edit Fakultas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2>Edit Fakultas</h2>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('fakultas.update', $fakulta->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama_fakultas">Nama Fakultas:</label>
            <input type="text" class="form-control" id="nama_fakultas" name="nama_fakultas" value="{{ $fakulta->nama_fakultas }}" required>
        </div>
        <div class="form-group">
            <label for="nama_pimpinan">Nama Pimpinan:</label>
            <input type="text" class="form-control" id="nama_pimpinan" name="nama_pimpinan" value="{{ $fakulta->nama_pimpinan }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
</body>
</html>
