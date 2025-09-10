@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Tambah Pasien</h2>

    <form action="{{ route('patients.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Nama Pasien</label>
            <input type="text" name="nama" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <textarea name="alamat" class="form-control" required></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">No Telepon</label>
            <input type="text" name="telepon" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Rumah Sakit</label>
            <select name="hospital_id" class="form-select" required>
                <option value="">-- Pilih Rumah Sakit --</option>
                @foreach($hospitals as $rs)
                    <option value="{{ $rs->id }}">{{ $rs->nama }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('patients.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
