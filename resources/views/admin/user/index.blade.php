@extends('layout/app')

@section('content')
    <h1 class="h3 mb-4 text-white text-center py-3"
        style="
        background: linear-gradient(to right, #4E342E, #6D4C41);
        border-radius: 15px;">
        <i class="fas fa-user-alt mr-2"></i>
        {{ $title }}
    </h1>

    <div class="card shadow" style="border-radius: 20px; background: linear-gradient(to bottom right, #F3E5AB, #EDE0D4);">
        <div class="card-header d-flex flex-wrap justify-content-center justify-content-xl-between"
            style="
            background: linear-gradient(to right, #8D6E63, #4E342E);
            color: white;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
        ">
            <div class="mb-1 mr-2">
                <a href="{{ route('userTambah') }}" class="btn btn-sm" style="background-color: #FFA726; color: white;">
                    <i class="fas fa-plus mr-2"></i> Tambah Data
                </a>
            </div>
            <div>
                <a href="{{ route('userExcell') }}" class="btn btn-sm" style="background-color: #81C784; color: white;">
                    <i class="fas fa-file-excel mr-2"></i> Excel
                </a>
                <a href="{{ route('userPdf') }}" class="btn btn-sm" style="background-color: #EF5350; color: white;"
                    target="_blank">
                    <i class="fas fa-file-pdf mr-2"></i> PDF
                </a>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover text-center" id="dataTable" width="100%" cellspacing="0"
                    style="background-color: #FFF8E1;">
                    <thead style="background: linear-gradient(to right, #6D4C41, #A1887F); color: white;">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Jabatan</th>
                            <th>Status</th>
                            <th><i class="fas fa-cog"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td class="text-left font-weight-bold" style="color: #5D4037;">{{ $item->nama }}</td>
                                <td>
                                    <span class="badge" style="background-color: #A1887F; color: white;">
                                        {{ $item->email }}
                                    </span>
                                </td>
                                <td>
                                    @if ($item->jabatan == 'admin')
                                        <span class="badge" style="background-color: #3E2723; color: white;">
                                            {{ $item->jabatan }}
                                        </span>
                                    @else
                                        <span class="badge" style="background-color: #4DB6AC; color: white;">
                                            {{ $item->jabatan }}
                                        </span>
                                    @endif
                                </td>
                                <td>
                                    @if (!$item->is_tugas)
                                        <span class="badge" style="background-color: #D84315; color: white;">
                                            Belum Ada Tugas
                                        </span>
                                    @else
                                        <span class="badge" style="background-color: #689F38; color: white;">
                                            Sudah Ada Tugas
                                        </span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('userEdit', $item->id) }}" class="btn btn-sm"
                                        style="background-color: #FFB300; color: white;">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <button class="btn btn-sm" style="background-color: #E53935; color: white;"
                                        data-toggle="modal" data-target="#exampleModal{{ $item->id }}">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                    @include('admin/user/modal')
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
