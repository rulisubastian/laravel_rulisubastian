@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Data Rumah Sakit</h2>

    <a href="{{ route('hospitals.create') }}" class="btn btn-success mb-3">Tambah Rumah Sakit</a>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nama Rumah Sakit</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($hospitals as $rs)
            <tr>
                <td>{{ $rs->id }}</td>
                <td>{{ $rs->nama }}</td>
                <td>{{ $rs->alamat }}</td>
                <td>{{ $rs->email }}</td>
                <td>{{ $rs->telepon }}</td>
                <td>
                    <a href="{{ route('hospitals.edit', $rs->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('hospitals.destroy', $rs->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Yakin hapus data ini?')" class="btn btn-sm btn-danger">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" class="text-center">Belum ada data rumah sakit</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
