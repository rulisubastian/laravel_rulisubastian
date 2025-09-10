@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Edit Pasien</h2>

    <form action="{{ route('patients.update', $patient->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Nama Pasien</label>
            <input type="text" name="nama" class="form-control" value="{{ $patient->nama }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <textarea name="alamat" class="form-control" required>{{ $patient->alamat }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">No Telepon</label>
            <input type="text" name="telepon" class="form-control" value="{{ $patient->telepon }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Rumah Sakit</label>
            <select name="hospital_id" class="form-select" required>
                @foreach($hospitals as $rs)
                    <option value="{{ $rs->id }}" {{ $patient->hospital_id == $rs->id ? 'selected' : '' }}>
                        {{ $rs->nama }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('patients.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
