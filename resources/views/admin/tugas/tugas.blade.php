@extends('layout/app')

@section('content')
<style>
    /* Tema bumi coklat */
    body {
        background-color: #f5f0e1;
    }

    h1.h3 {
        color: #5a3825;
        font-weight: bold;
        text-shadow: 1px 1px 1px #d2b48c;
    }

    .card {
        border: 1px solid #8d6e63;
        background-color: #fffaf5;
        box-shadow: 0 4px 8px rgba(138, 80, 30, 0.2);
        animation: fadeIn 1s ease-in-out;
    }

    .card-header {
        background-color: #a1887f;
        color: white;
    }

    table th {
        background-color: #6d4c41 !important;
        color: white !important;
    }

    table td {
        background-color: #efebe9;
        border: 1px solid #a1887f;
    }

    .btn {
        transition: transform 0.2s ease;
    }

    .btn:hover {
        transform: scale(1.05);
    }

    /* Animasi saat tabel muncul */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(15px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<h1 class="h3 mb-4 text-gray-800">
    <i class="fas fa-clipboard"></i> {{-- Ikon bertema alam --}}
    Data Tugas
</h1>

<div class="card">
    <div class="card-header d-flex flex-wrap justify-content-center justify-content-xl-between">
        <div class="mb-1 mr-2">
            <a href="{{ route('tugasCreate') }}" class="btn btn-sm btn-primary">
                <i class="fas fa-plus-circle mr-2"></i> Tambah Data
            </a>
        </div>
        <div>
            <a href="{{ route('tugasExcell') }}" class="btn btn-sm btn-success">
                <i class="fas fa-file-excel mr-2"></i> Excel
            </a>
            <a href="{{ route('tugasPdf') }}" class="btn btn-sm btn-danger" target='__blank'>
                <i class="fas fa-file-pdf mr-2"></i> PDF
            </a>
        </div>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover animate__animated animate__fadeIn" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr class="text-center">
                        <th><i class="fas fa-list-ol"></i> No</th>
                        <th><i class="fas fa-user"></i> Nama</th>
                        <th><i class="fas fa-tasks"></i> Tugas</th>
                        <th><i class="fas fa-play-circle"></i> Mulai</th>
                        <th><i class="fas fa-check-circle"></i> Selesai</th>
                        <th><i class="fas fa-cog"></i></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tugas as $item)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $item->user->nama }}</td>
                            <td><i class="fas fa-envelope-open-text mr-1 text-primary"></i>{{ $item->tugas }}</td>
                            <td class="text-center">
                                <span class="badge badge-info">{{ $item->tanggal_mulai }}</span>
                            </td>
                            <td class="text-center">
                                <span class="badge badge-info">{{ $item->tanggal_selesai }}</span>
                            </td>
                            <td class="text-center">
                                <button class="btn btn-sm btn-info" data-toggle="modal"
                                    data-target="#modalTugasShow{{ $item->id }}">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <a href="{{ route('tugasEdit', $item->id) }}" class="btn btn-sm btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <button class="btn btn-sm btn-danger" data-toggle="modal"
                                    data-target="#modalTugasDestroy{{ $item->id }}">
                                    <i class="fas fa-trash"></i>
                                </button>
                                @include('admin/tugas/modal')
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
