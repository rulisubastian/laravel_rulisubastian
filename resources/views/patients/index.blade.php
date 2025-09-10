@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Data Pasien</h2>
    <a href="{{ route('patients.create') }}" class="btn btn-success mb-3">Tambah Pasien</a>

    <div class="mb-3">
        <label>Filter Rumah Sakit:</label>
        <select id="hospitalFilter" class="form-select" style="width:auto; display:inline-block;">
            <option value="">-- Semua --</option>
            @foreach($hospitals as $rs)
                <option value="{{ $rs->id }}">{{ $rs->nama }}</option>
            @endforeach
        </select>
    </div>

    <table class="table table-bordered" id="patientTable">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Rumah Sakit</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($patients as $p)
            <tr data-id="{{ $p->id }}">
                <td>{{ $p->nama }}</td>
                <td>{{ $p->alamat }}</td>
                <td>{{ $p->telepon }}</td>
                <td>{{ $p->hospital->nama }}</td>
                <td>
                    <a href="{{ route('patients.edit', $p->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <button class="btn btn-sm btn-danger btn-delete">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(function(){
    // Delete Ajax
    $('.btn-delete').click(function(){
        if(confirm("Yakin hapus data ini?")) {
            let row = $(this).closest('tr');
            let id = row.data('id');
            $.ajax({
                url: '/patients/' + id,
                type: 'DELETE',
                data: {_token: '{{ csrf_token() }}'},
                success: function(res) {
                    if(res.success) row.remove();
                }
            });
        }
    });

    // Filter Ajax
    $('#hospitalFilter').change(function(){
        let hospitalId = $(this).val();
        $.get('/patients/filter/' + hospitalId, function(data){
            let tbody = $('#patientTable tbody');
            tbody.empty();
            data.forEach(p => {
                tbody.append(`
                    <tr data-id="${p.id}">
                        <td>${p.nama}</td>
                        <td>${p.alamat}</td>
                        <td>${p.telepon}</td>
                        <td>${p.hospital.nama}</td>
                        <td>
                            <a href="/patients/${p.id}/edit" class="btn btn-sm btn-warning">Edit</a>
                            <button class="btn btn-sm btn-danger btn-delete">Delete</button>
                        </td>
                    </tr>
                `);
            });
        });
    });
});
</script>
@endsection
