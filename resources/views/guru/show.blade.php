@extends('layouts.app')

@section('content')
    <h1>Detail Guru</h1>
    <p><strong>Nama:</strong> {{ $guru->nama }}</p>
    <p><strong>NIP:</strong> {{ $guru->nip }}</p>
    <p><strong>Mata Pelajaran:</strong> {{ $guru->mapel }}</p>

    <a href="{{ route('guru.edit', $guru->id) }}" class="btn btn-warning">Edit</a>
    <a href="{{ route('guru.index') }}" class="btn btn-secondary">Kembali</a>
@endsection
