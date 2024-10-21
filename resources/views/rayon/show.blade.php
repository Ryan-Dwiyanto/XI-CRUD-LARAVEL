@extends('layouts.app')

@section('content')
    <h1>Detail Rayon</h1>
    <p><strong>Nama:</strong> {{ $rayon->nama }}</p>
    <p><strong>Wilayah:</strong> {{ $rayon->wilayah->nama ?? '-' }}</p>
    <p><strong>NIP:</strong> {{ $rayon->nip }}</p>

    <a href="{{ route('rayon.edit', $rayon->id) }}" class="btn btn-warning">Edit</a>
    <a href="{{ route('rayon.index') }}" class="btn btn-secondary">Kembali</a>
@endsection
