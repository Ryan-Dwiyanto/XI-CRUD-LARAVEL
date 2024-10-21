@extends('layouts.app')

@section('content')
    <h1>Detail Siswa</h1>
    <p><strong>Nama:</strong> {{ $siswa->nama }}</p>
    <p><strong>NIS:</strong> {{ $siswa->nis }}</p>
    <p><strong>Rayon:</strong> {{ $siswa->rayon->nama ?? '-' }}</p>

    <a href="{{ route('siswa.edit', $siswa->id) }}" class="btn btn-warning">Edit</a>
    <a href="{{ route('siswa.index') }}" class="btn btn-secondary">Kembali</a>
@endsection
