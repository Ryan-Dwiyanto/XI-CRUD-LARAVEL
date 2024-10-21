@extends('layouts.app')

@section('content')
    <h1>Tambah Siswa</h1>

    <form action="{{ route('siswa.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="nis">NIS</label>
            <input type="text" name="nis" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="id_rayon">Rayon</label>
            <select name="id_rayon" class="form-control" required>
                @foreach($rayons as $rayon)
                    <option value="{{ $rayon->id }}">{{ $rayon->nama }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('siswa.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
