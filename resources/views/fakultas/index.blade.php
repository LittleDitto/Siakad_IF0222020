<!-- resources/views/fakultas/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Fakultas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2>Daftar Fakultas</h2>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('fakultas.create') }}" class="btn btn-primary">Tambah Fakultas</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Fakultas</th>
                <th>Nama Pimpinan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($fakultas as $f)
            <tr>
                <td>{{ $f->id }}</td>
                <td>{{ $f->nama_fakultas }}</td>
                <td>{{ $f->nama_pimpinan }}</td>
                <td>
                    <a href="{{ route('fakultas.show', $f->id) }}" class="btn btn-info">Lihat</a>
                    <a href="{{ route('fakultas.edit', $f->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('fakultas.destroy', $f->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
