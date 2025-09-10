@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Edit Rumah Sakit</h2>

    <form action="{{ route('hospitals.update', $hospital->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Nama Rumah Sakit</label>
            <input type="text" name="nama" class="form-control" value="{{ $hospital->nama }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <textarea name="alamat" class="form-control" required>{{ $hospital->alamat }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="{{ $hospital->email }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Telepon</label>
            <input type="text" name="telepon" class="form-control" value="{{ $hospital->telepon }}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('hospitals.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
