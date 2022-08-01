@extends('pasiens.layout')

@section('title', 'Dashboard Pendaftaran Pasien')

@section('header')
     <a href="/pasiens" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto mx-5 text-dark text-decoration-none">
        <span class="fs-2">Dashboard</span>
    </a>
@endsection

@section('content')
    <div class="row mt-5">
        <div class="col-lg-12 margin-tb mb-3">
            <div class="d-flex justify-content-start">
                <h3>Daftar Pasien</h3>
            </div>
            <div class="d-flex justify-content-end">
                <a class="btn btn-success" href="{{ route('pasiens.create') }}">Tambah Data Pasien</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Keluhan</th>
                <th>Aksi</th>
            </tr>
            @forelse ($pasiens as $pasien)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $pasien->nama_pasien }}</td>
                <td>{{ $pasien->umur }}</td>
                <td>{{ $pasien->jenis_kelamin }}</td>
                <td>{{ $pasien->alamat }}</td>
                <td>{{ $pasien->keluhan }}</td>
                <td>
                    <form onsubmit="return confirm('Apakah anda yakin menghapus data {{ $pasien->nama_pasien }}?');" action="{{ route('pasiens.destroy', $pasien->id) }}" method="POST">
                        <a class="btn btn-primary" href="{{ route('pasiens.edit', $pasien->id) }}">Ubah</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
                <div class="alert alert-danger mt-2">
                    Data pasien belum tersedia.
                </div>
            @endforelse
        </table>
        {{ $pasiens->links('pagination::bootstrap-5') }}
    </div>
@endsection