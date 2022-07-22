@extends('pasiens.layout')

@section('title', 'Ubah Data Pasien')

@section('content')
    <div class="row mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="d-flex justify-content-star">
                <h4>Ubah Data Pasien</h4>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Data yang anda masukkan masih kosong.<br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('pasiens.update', $pasien->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="namaPasien" class="form-label">Nama</label>
            <input type="text" id="namaPasien" name="nama_pasien" value="{{ $pasien->nama_pasien }}" class="form-control" placeholder="Masukkan Nama Lengkap Pasien">
        </div>
        <div class="mb-3">
            <label for="umurPasien" class="form-label">Umur</label>
            <input type="number" id="umurPasien" name="umur" value="{{ $pasien->umur }}" class="form-control" placeholder="Masukkan Umur Pasien">
        </div>
        <div class="mb-3">
            <label for="jenisKelaminPasien" class="form-label">Jenis Kelamin</label>
            <select name="jenis_kelamin" id="jenisKelaminPasien" value="{{ $pasien->jenis_kelamin }}" class="form-select" aria-label="Default select example">
                <option selected>Pilih Jenis Kelamin</option>
                <option>Laki-Laki</option>
                <option>Perempuan</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="alamatPasien" class="form-label">Alamat</label>
            <input type="text" id="alamatPasien" name="alamat" value="{{ $pasien->alamat }}" class="form-control" placeholder="Masukkan Alamat Pasien">
        </div>
        <div class="mb-3">
            <label for="keluhanPasien" class="form-label">Keluhan Pasien</label>
            <textarea name="keluhan" id="keluhanPasien" rows="5" class="form-control" placeholder="Masukkan Keluhan Pasien">
                {{ $pasien->keluhan }}
            </textarea>
        </div>
        <div class="d-flex justify-content-end">
            <a class="btn btn-warning mx-3" href="{{ route('pasiens.index') }}">Kembali</a>
            <button type="submit" class="btn btn-primary">Ubah Data</button>
        </div>
    </form>
@endsection