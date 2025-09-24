@extends('admin.dashboard')

@section('content')
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('mahasiswa.index') }}">Mahasiswa</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0)">Edit Data Mahasiswa</a></li>
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
                    <h5>Edit Data Mahasiswa</h5>
                </div>
                <form action="{{ route('mahasiswa.update', $mahasiswa->nim) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="card-body">
                        <div class="form-group">
                            <label for="nim" class="form-label">NIM</label>
                            <input type="number" id="nim" name="nim" class="form-control"
                                value="{{ $mahasiswa->nim }}" readonly>
                        </div>

                        <div class="form-group">
                            <label for="nama" class="form-label">Nama Mahasiswa</label>
                            <input type="text" id="nama" name="nama" class="form-control"
                                value="{{ $mahasiswa->nama }}" required>
                        </div>

                        <div class="form-group">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="L" {{ $mahasiswa->jenis_kelamin == 'L' ? 'selected' : '' }}>Laki-laki
                                </option>
                                <option value="P" {{ $mahasiswa->jenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan
                                </option>

                            </select>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button class="btn btn-warning me-2" type="submit">Update</button>
                        <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
