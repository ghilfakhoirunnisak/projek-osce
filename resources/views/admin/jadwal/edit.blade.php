@extends('admin.dashboard')

@section('content')
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('jadwal.index') }}">Jadwal</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0)">Edit Data Jadwal</a></li>
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
                    <h5>Edit Data Jadwal</h5>
                </div>
                <form action="{{ route('jadwal.update', $jadwal->id_jadwal) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label for="id_jadwal" class="form-label">No</label>
                            <input type="number" id="id_jadwal" name="id_jadwal" class="form-control"
                                value="{{ $jadwal->id_jadwal }}" readonly>
                        </div>

                        <div class="form-group mb-3">
                            <label for="tanggal" class="form-label">Tanggal</label>
                            <input type="date" id="tanggal" name="tanggal" class="form-control"
                                value="{{ $jadwal->tanggal }}" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="waktu_mulai" class="form-label">Waktu Mulai</label>
                            <input type="time" id="waktu_mulai" name="waktu_mulai" class="form-control"
                                value="{{ $jadwal->waktu_mulai }}" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="waktu_akhir" class="form-label">Waktu Berakhir</label>
                            <input type="time" id="waktu_akhir" name="waktu_akhir" class="form-control"
                                value="{{ $jadwal->waktu_akhir }}" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="sesi" class="form-label">Sesi</label>
                            <input type="number" id="sesi" name="sesi" class="form-control"
                                value="{{ $jadwal->sesi }}" required>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-warning me-2" type="submit">Update</button>
                        <a href="{{ route('jadwal.index') }}" class="btn btn-secondary">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
