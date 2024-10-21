@extends('layouts.app')

@section('content')
    <h1>Daftar Wilayah</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Jumlah Rayon</th>
            </tr>
        </thead>
        <tbody>
            @foreach($wilayahs as $wilayah)
                <tr>
                    <td>{{ $wilayah->nama }}</td>
                    <td>{{ $wilayah->rayons_count }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
