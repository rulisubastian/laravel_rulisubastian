@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Tambah Rumah Sakit</h2>

    <form action="{{ route('hospitals.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nama Rumah Sakit</label>
            <input type="text" name="nama" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <textarea name="alamat" class="form-control" required></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Telepon</label>
            <input type="text" name="telepon" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('hospitals.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
