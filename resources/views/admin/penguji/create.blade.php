@extends('admin.dashboard')

@section('content')
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('penguji.index') }}">Penguji</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0)">Tambah Data Penguji</a></li>
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
                    <h5>Tambah Data Penguji</h5>
                </div>
                <form action="{{ route('penguji.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama_penguji" class="form-label">Nama Penguji</label>
                            <input type="text" id="nama_penguji" name="nama_penguji" class="form-control"
                                placeholder="Inputkan Nama Penguji" required>
                        </div>

                        <div class="form-group">
                            <label for="telp" class="form-label">Telp</label>
                            <input type="number" id="telp" name="telp" class="form-control"
                                placeholder="Inputkan Nomor Telepon" required>
                        </div>

                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" name="email" class="form-control"
                                placeholder="Inputkan Email" required>
                        </div>

                        <div class="form-group">
                            <label for="asal_instansi" class="form-label">Asal Instansi</label>
                            <input type="text" id="asal_instansi" name="asal_instansi" class="form-control"
                                placeholder="Inputkan Asal Instansi" required>
                        </div>

                        <div class="form-group">
                            <label for="password" class="form-label">Passsword</label>
                            <input type="password" id="password" name="password" class="form-control"
                                placeholder="Inputkan Password" required>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary me-2" type="submit">Submit</button>
                        <a href="{{ route('penguji.index') }}" class="btn btn-secondary">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
