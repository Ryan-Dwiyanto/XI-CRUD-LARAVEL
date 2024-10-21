<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Rayon;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $siswas = Siswa::with('rayon')->get();
        return view('siswa.index', compact('siswas'));
    }

    public function create()
    {
        $rayons = Rayon::all();
        return view('siswa.create', compact('rayons'));
    }

    public function store(Request $request)
{
    // Validasi input
    $request->validate([
        'nama' => 'required|string|max:255',
        'nis' => 'required|string|max:10|unique:siswas,nis',
        'id_rayon' => 'required|exists:rayons,id',
    ]);

    // Simpan data siswa
    Siswa::create([
        'nama' => $request->nama,
        'nis' => $request->nis,
        'id_rayon' => $request->id_rayon,
    ]);

    return redirect()->route('siswa.index')->with('success', 'Siswa berhasil ditambahkan.');
}


    public function show($id)
{
    $siswa = Siswa::findOrFail($id);
    return view('siswa.show', compact('siswa'));
}


    public function edit(Siswa $siswa)
    {
        $rayons = Rayon::all();
        return view('siswa.edit', compact('siswa', 'rayons'));
    }

    public function update(Request $request, Siswa $siswa)
    {
        $request->validate([
            'nama' => 'required',
            'nis' => 'required|unique:siswa,nis,' . $siswa->id,
            'id_rayon' => 'required|exists:rayon,id',
        ]);

        $siswa->update($request->all());
        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil diperbarui.');
    }

    public function destroy(Siswa $siswa)
    {
        $siswa->delete();
        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil dihapus.');
    }
}
