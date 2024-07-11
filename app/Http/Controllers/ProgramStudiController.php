<?php

namespace App\Http\Controllers;

//import Model "Post
use App\Models\ProgramStudi;
use App\Models\Fakultas;

//return type View
use Illuminate\View\View;

use Illuminate\Http\Request;

class ProgramStudiController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        $programstudis = ProgramStudi::with('fakultas')->get();
        return view('programstudis.index', compact('programstudis'));
    }
    public function create()
    {
        $fakultas = Fakultas::all();
        return view('programstudis.create', compact('fakultas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_prodi' => 'required|integer',
            'nama_prodi' => 'required|string|max:255',
            'fakultas_id' => 'required|exists:fakultas,id',
        ]);

        // Ambil fakultas_id dari request
        $fakultasId = $request->input('fakultas_id');

        // Buat entry baru di program_studis dengan mengisi kode_fakultas
        $programStudi = new ProgramStudi();
        $programStudi->kode_prodi = $request->input('kode_prodi');
        $programStudi->nama_prodi = $request->input('nama_prodi');
        $programStudi->kode_fakultas = $fakultasId; // Menggunakan nilai fakultas_id langsung ke kode_fakultas

        $programStudi->save();

        return redirect()->route('programstudis.index')->with('success', 'Program Studi berhasil ditambahkan.');
    }

    public function show(ProgramStudi $programstudi)
    {
        return view('programstudis.show', compact('programstudi'));
    }

    public function edit(ProgramStudi $programstudi)
    {
        $fakultas = Fakultas::all();
        return view('programstudis.edit', compact('programstudi', 'fakultas'));
    }

    public function update(Request $request, ProgramStudi $programstudi)
    {
        $request->validate([
            'kode_prodi' => 'required|integer',
            'nama_prodi' => 'required|string|max:255',
            'fakultas_id' => 'required|exists:fakultas,id',
        ]);

        $programstudi->update($request->all());

        return redirect()->route('programstudis.index')->with('success', 'Program Studi berhasil diperbarui.');
    }

    public function destroy(ProgramStudi $programstudi)
    {
        $programstudi->delete();
        return redirect()->route('programstudis.index')->with('success', 'Program Studi berhasil dihapus.');
    }

}