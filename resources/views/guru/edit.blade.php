@extends('layouts.app')

@section('content')
    <h1>Edit Guru</h1>

    <form action="{{ route('guru.update', $guru->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $guru->nama }}" required>
        </div>

        <div class="form-group">
            <label for="nip">NIP</label>
            <input type="text" name="nip" class="form-control" value="{{ $guru->nip }}" required>
        </div>

        <div class="form-group">
            <label for="mapel">Mata Pelajaran</label>
            <input type="text" name="mapel" class="form-control" value="{{ $guru->mapel }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('guru.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
