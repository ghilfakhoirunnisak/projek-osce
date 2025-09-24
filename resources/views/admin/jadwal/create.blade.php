@extends('admin.dashboard')

@section('content')
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('jadwal.index') }}">Jadwal</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0)">Tambah Data Jadwal</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- [ breadcrumb ] end -->

    <!-- [ Main Content ] start -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Tambah Data Jadwal</h5>
                </div>
                <form action="{{ route('jadwal.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label for="tanggal" class="form-label">Tanggal</label>
                            <input type="date" id="tanggal" name="tanggal" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="waktu_mulai" class="form-label">Waktu Mulai</label>
                            <input type="time" id="waktu_mulai" name="waktu_mulai" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="waktu_akhir" class="form-label">Waktu Berakhir</label>
                            <input type="time" id="waktu_akhir" name="waktu_akhir" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="sesi" class="form-label">Sesi</label>
                            <input type="number" id="sesi" name="sesi" class="form-control" min="1"
                                required>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary me-2" type="submit">Submit</button>
                        <a href="{{ route('jadwal.index') }}" class="btn btn-secondary">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
