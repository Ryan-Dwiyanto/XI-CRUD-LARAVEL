@extends('layouts.app')

@section('content')
    <h1>Daftar Guru</h1>
    <a href="{{ route('guru.create') }}" class="btn btn-primary">Tambah Guru</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIP</th>
                <th>Mata Pelajaran</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($gurus as $guru)
                <tr>
                    <td>{{ $guru->nama }}</td>
                    <td>{{ $guru->nip }}</td>
                    <td>{{ $guru->mapel }}</td>
                    <td>
                        <a href="{{ route('guru.show', $guru->id) }}" class="btn btn-info">Lihat</a>
                        <a href="{{ route('guru.edit', $guru->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('guru.destroy', $guru->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
