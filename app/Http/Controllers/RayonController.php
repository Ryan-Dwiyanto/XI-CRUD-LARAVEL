<?php

namespace App\Http\Controllers;

use App\Models\Rayon;
use App\Models\Wilayah;
use App\Models\Guru;
use Illuminate\Http\Request;

class RayonController extends Controller
{
    public function index()
    {
        $rayons = Rayon::with('wilayah')->get();
        return view('rayon.index', compact('rayons'));
    }

    public function create()
    {
        $wilayahs = Wilayah::all();
        $nipUsed = Rayon::pluck('nip'); // Ambil semua NIP yang sudah digunakan di Rayon
        $gurus = Guru::whereNotIn('nip', $nipUsed)->get(); // Ambil NIP yang belum digunakan

        return view('rayon.create', compact('wilayahs' ,'gurus'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'id_wilayah' => 'required|exists:wilayah,id',
            'nip' => 'required',
        ]);

        Rayon::create($request->all());
        return redirect()->route('rayon.index')->with('success', 'Rayon berhasil ditambahkan.');
    }

    public function show($id)
{
    $rayon = Rayon::findOrFail($id);
    return view('rayon.show', compact('rayon'));
}


    public function edit($id)
    {
        $rayon = Rayon::findOrFail($id);
        $wilayahs = Wilayah::all();
        $nipUsed = Rayon::where('id', '!=', $id)->pluck('nip');
        $gurus = Guru::whereNotIn('nip', $nipUsed)->get();
        return view('rayon.edit', compact('rayon', 'wilayahs','gurus'));
    }

    public function update(Request $request, Rayon $rayon)
    {
        $request->validate([
            'nama' => 'required',
            'id_wilayah' => 'required|exists:wilayah,id',
            'nip' => 'required',
        ]);

        $rayon->update($request->all());
        return redirect()->route('rayon.index')->with('success', 'Rayon berhasil diperbarui.');
    }

    public function destroy(Rayon $rayon)
    {
        $rayon->delete();
        return redirect()->route('rayon.index')->with('success', 'Rayon berhasil dihapus.');
    }
}
