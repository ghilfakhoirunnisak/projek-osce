@extends('admin.dashboard')

@section('content')
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Jadwal</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">DAFTAR JADWAL</h4>
                    <a href="{{ route('jadwal.create') }}" class="btn btn-primary">
                        <i class="bi bi-plus-circle"></i> Tambah
                    </a>
                </div>

                <div class="card-body">
                    <div class="dt-responsive">
                        <table id="dom-jqry" class="table table-striped table-bordered nowrap">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Waktu Mulai</th>
                                    <th>Waktu Berakhir</th>
                                    <th>Sesi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jadwal as $item)
                                    <tr>
                                        <td>{{ $item->id_jadwal }}</td>
                                        <td>{{ $item->tanggal }}</td>
                                        <td>{{ $item->waktu_mulai }}</td>
                                        <td>{{ $item->waktu_akhir }}</td>
                                        <td>{{ $item->sesi }}</td>
                                        <td>
                                            <a href="{{ route('jadwal.edit', $item->id_jadwal) }}"
                                                class="btn btn-warning btn-sm" title="Edit">
                                                <i class="ti ti-edit"></i>
                                            </a>
                                            <form action="{{ route('jadwal.destroy', $item->id_jadwal) }}" method="POST"
                                                style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" title="Hapus"
                                                    onclick="return confirm('Yakin hapus data ini?')">
                                                    <i class="ti ti-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
