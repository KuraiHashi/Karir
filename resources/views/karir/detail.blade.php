@extends('template.main')
@section('karir', 'active')
@section('judul', 'Table Karir')
@section('konten')

    <div class="card">
        <div class="card-body">

            @if ($karir)
                <p><strong>Nama:</strong> {{ $karir->name }}</p>
                <p><strong>Kota:</strong> {{ $karir->kota }}</p>
                <p><strong>Bidang:</strong> {{ $karir->bidang }}</p>
                <p><strong>Skill:</strong> {{ $karir->skill }}</p>
                <p><strong>Pengalaman:</strong> {{ $karir->pengalaman }}</p>
            @else
                <p>Data tidak ditemukan.</p>
            @endif


        </div>
        <div class="m-3 d-flex justify-content-end">
            <a href="/karir" class="btn btn-primary m-1">Kembali</a>
        </div>
    </div>

@endsection
