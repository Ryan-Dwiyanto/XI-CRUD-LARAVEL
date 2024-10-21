@extends('layouts.app')

@section('content')
    <h1>Daftar Rayon</h1>
    <a href="{{ route('rayon.create') }}" class="btn btn-primary">Tambah Rayon</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Wilayah</th>
                <th>NIP</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rayons as $rayon)
                <tr>
                    <td>{{ $rayon->nama }}</td>
                    <td>{{ $rayon->wilayah->nama ?? '-' }}</td>
                    <td>{{ $rayon->nip }}</td>
                    <td>
                        <a href="{{ route('rayon.show', $rayon->id) }}" class="btn btn-info">Lihat</a>
                        <a href="{{ route('rayon.edit', $rayon->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('rayon.destroy', $rayon->id) }}" method="POST" style="display:inline;">
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
