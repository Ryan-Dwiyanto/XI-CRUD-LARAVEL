@extends('layouts.app')

@section('content')
    <h1>Edit Rayon</h1>

    <form action="{{ route('rayon.update', $rayon->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $rayon->nama }}" required>
        </div>

        <div class="form-group">
            <label for="id_wilayah">Wilayah</label>
            <select name="id_wilayah" class="form-control" required>
                @foreach($wilayahs as $wilayah)
                    <option value="{{ $wilayah->id }}" {{ $rayon->id_wilayah == $wilayah->id ? 'selected' : '' }}>
                        {{ $wilayah->nama }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
        <label for="nip">NIP Guru</label>
            <select name="nip" class="form-control" id="nip" required>
                @foreach($gurus as $guru)
                    <option value="{{ $guru->nip }}" {{ $guru->nip == $rayon->nip ? 'selected' : '' }}>
                        {{ $guru->nip }} - {{ $guru->nama }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('rayon.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
