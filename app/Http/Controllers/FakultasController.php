<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Fakultas;

//return type View
use Illuminate\View\View;

class FakultasController extends Controller
{
    // Menampilkan daftar fakultas
    public function index()
    {
        $fakultas = Fakultas::all();
        return view('fakultas.index', compact('fakultas'));
    }

    // Menampilkan form untuk menambah fakultas baru
    public function create()
    {
        return view('fakultas.create');
    }

    // Menyimpan fakultas baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'nama_fakultas' => 'required|string|max:255',
            'nama_pimpinan' => 'required|string|max:255',
        ]);

        Fakultas::create([
            'nama_fakultas' => $request->nama_fakultas,
            'nama_pimpinan' => $request->nama_pimpinan,
        ]);

        return redirect()->route('fakultas.index')->with('success', 'Fakultas berhasil ditambahkan.');
    }

    // Menampilkan detail fakultas tertentu
    public function show(Fakultas $fakulta)
    {
        $prodis = $fakulta->programstudis;
        return view('fakultas.show', compact('fakulta', 'prodis'));
    }

    // Menampilkan form untuk mengedit fakultas tertentu
    public function edit(Fakultas $fakulta)
    {
        return view('fakultas.edit', compact('fakulta'));
    }

    public function update(Request $request, Fakultas $fakulta)
    {
        $request->validate([
            'nama_fakultas' => 'required|string|max:255',
            'nama_pimpinan' => 'required|string|max:255',
        ]);

        $fakulta->update([
            'nama_fakultas' => $request->nama_fakultas,
            'nama_pimpinan' => $request->nama_pimpinan,
        ]);

        return redirect()->route('fakultas.index')->with('success', 'Fakultas berhasil diperbarui.');
    }
    // Menghapus fakultas tertentu dari database
    public function destroy(Fakultas $fakulta)
    {
        $fakulta->delete();
        return redirect()->route('fakultas.index')->with('success', 'Fakultas berhasil dihapus.');
    }
}
