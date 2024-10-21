@extends('layouts.app')

@section('content')
    <h1>Edit Siswa</h1>

    <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $siswa->nama }}" required>
        </div>

        <div class="form-group">
            <label for="nis">NIS</label>
            <input type="text" name="nis" class="form-control" value="{{ $siswa->nis }}" required>
        </div>

        <div class="form-group">
            <label for="id_rayon">Rayon</label>
            <select name="id_rayon" class="form-control" required>
                @foreach($rayons as $rayon)
                    <option value="{{ $rayon->id }}" {{ $siswa->id_rayon == $rayon->id ? 'selected' : '' }}>
                        {{ $rayon->nama }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('siswa.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
