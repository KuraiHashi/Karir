@extends('template.main')
@section('karir', 'active')
@section('judul', 'Form Pendaftaran Karir')
@section('konten')

    <div class="card">
        <div class="card-body">

            <form method="POST" action="{{ route('karir.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" name="name" value="{{ old('name', Auth::user()->name) }}"
                        class="form-control
              @error('name')
                is-invalid
                @enderror"
                        id="name" required>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="kota" class="form-label">Kota</label>
                    <select class="form-control" name="kota" aria-label="Default select example" required>
                        <option selected>Pilih kota asal anda!</option>
                        @foreach ($kota as $item)
                            <option value="{{ $item }}">{{ $item }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="bidang" class="form-label">Bidang</label>
                    <select class="form-control" name="bidang" aria-label="Default select example" required>
                        <option selected>Pilih bidang keahlian anda!</option>
                        @foreach ($bidang as $item)
                            <option value="{{ $item }}">{{ $item }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="skill" class="form-label">Skill</label>
                    <input type="text" name="skill" value="{{ old('skill') }}"
                        class="form-control
              @error('skill')
                is-invalid
                @enderror"
                        id="skill">
                    @error('skill')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="pengalaman" class="form-label">Pengalaman</label>
                    <input type="text" name="pengalaman" value="{{ old('pengalaman') }}"
                        class="form-control
              @error('pengalaman')
                is-invalid
                @enderror"
                        id="pengalaman">
                    @error('pengalaman')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <a href="/karir" class="btn btn-primary m-1">Kembali</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>

@endsection
