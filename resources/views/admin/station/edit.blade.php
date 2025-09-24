@extends('admin.dashboard')

@section('content')
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('station.index') }}">Station</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0)">Edit Data Station</a></li>
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
                    <h5>Edit Data Station</h5>
                </div>
                <form action="{{ route('station.update', $station->id_station) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="card-body">
                        <div class="form-group">
                            <label for="id_station" class="form-label">No</label>
                            <input type="number" id="id_station" name="id_station" class="form-control"
                                value="{{ $station->id_station }}" readonly>
                        </div>

                        <div class="form-group">
                            <label for="nama_station" class="form-label">Nama Station</label>
                            <input type="text" id="nama_station" name="nama_station" class="form-control"
                                value="{{ $station->nama_station }}" required>
                        </div>

                        <div class="form-group">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-control" id="status" name="status" required>
                                <option value="">Pilih Status</option>
                                <option value="active" {{ $station->status == 'active' ? 'selected' : '' }}>Active
                                </option>
                                <option value="block" {{ $station->status == 'block' ? 'selected' : '' }}>Block
                                </option>

                            </select>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button class="btn btn-warning me-2" type="submit">Update</button>
                        <a href="{{ route('station.index') }}" class="btn btn-secondary">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
