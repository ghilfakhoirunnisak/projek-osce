@extends('admin.dashboard')

@section('content')
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('penguji.index') }}">Penguji</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0)">Edit Data Penguji</a></li>
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
                    <h5>Edit Data Penguji</h5>
                </div>
                <form action="{{ route('penguji.update', $penguji->id_penguji) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="card-body">
                        <div class="form-group">
                            <label for="id_penguji" class="form-label">No</label>
                            <input type="number" id="id_penguji" name="id_penguji" class="form-control"
                                value="{{ $penguji->id_penguji }}" readonly>
                        </div>

                        <div class="form-group">
                            <label for="nama_penguji" class="form-label">Nama Penguji</label>
                            <input type="text" id="nama_penguji" name="nama_penguji" class="form-control"
                                value="{{ $penguji->nama_penguji }}" required>
                        </div>

                        <div class="form-group">
                            <label for="telp" class="form-label">Telp</label>
                            <input type="number" id="telp" name="telp" class="form-control"
                                value="{{ $penguji->telp }}" required>
                        </div>

                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" name="email" class="form-control"
                                value="{{ $penguji->email }}" required>
                        </div>

                        <div class="form-group">
                            <label for="asal_instansi" class="form-label">Asal Instansi</label>
                            <input type="text" id="asal_instansi" name="asal_instansi" class="form-control"
                                value="{{ $penguji->asal_instansi }}" required>
                        </div>

                        <div class="form-group">
                            <label for="password" class="form-label">Password <small class="text-muted">(kosongkan jika
                                    tidak ingin mengubah)</small></label>
                            <input type="password" id="password" name="password" class="form-control"
                                placeholder="Masukkan password baru (opsional)">
                        </div>
                    </div>

                    <div class="card-footer">
                        <button class="btn btn-warning me-2" type="submit">Update</button>
                        <a href="{{ route('penguji.index') }}" class="btn btn-secondary">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
