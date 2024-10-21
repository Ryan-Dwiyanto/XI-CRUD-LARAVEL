@extends('layouts.app')

@section('content')
    <h1>Tambah Rayon</h1>

    <form action="{{ route('rayon.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="id_wilayah">Wilayah</label>
            <select name="id_wilayah" class="form-control" required>
                @foreach($wilayahs as $wilayah)
                    <option value="{{ $wilayah->id }}">{{ $wilayah->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
        <label for="nip">NIP Guru</label>
            <select name="nip" class="form-control" id="nip" required>
                <option value="">Pilih NIP Guru</option>
                @foreach($gurus as $guru)
                    <option value="{{ $guru->nip }}">{{ $guru->nip }} - {{ $guru->nama }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('rayon.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
