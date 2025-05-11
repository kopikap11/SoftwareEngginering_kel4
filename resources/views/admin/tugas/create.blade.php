@extends('layout/app')

@section('content')
<style>
    body {
        background-color: #f5f0e1;
    }

    h1.h3 {
        background: linear-gradient(to right, #5a3825, #a67c52);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-weight: bold;
        animation: slideFade 0.8s ease-in-out;
    }

    .card {
        border: 1px solid #8d6e63;
        background-color: #fffaf5;
        box-shadow: 0 4px 10px rgba(138, 80, 30, 0.25);
        animation: slideIn 0.7s ease-out;
    }

    .card-header {
        background-color: #6d4c41;
        color: white;
    }

    label.form-label {
        color: #4e342e;
        font-weight: 600;
    }

    .btn-primary {
        background-color: #795548;
        border: none;
    }

    .btn-primary:hover {
        background-color: #5d4037;
    }

    .btn-warning {
        background-color: #bcaaa4;
        border: none;
        color: #3e2723;
    }

    .btn-warning:hover {
        background-color: #a1887f;
        color: white;
    }

    textarea, input[type="date"], select {
        border: 1px solid #a1887f;
    }

    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateX(30px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes slideFade {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<h1 class="h3 mb-4">
    <i class="fas fa-clipboard"></i> {{-- beda ikon untuk halaman create --}}
    {{ $title }}
</h1>

<div class="card">
    <div class="card-header">
        <a href="{{ route('tugas') }}" class="btn btn-sm btn-warning">
            <i class="fas fa-arrow-left mr-2"></i> Kembali
        </a>
    </div>
    <div class="card-body">

        {{-- FORM --}}
        <form action="{{ route('tugasStore') }}" method="post">
            @csrf

            {{-- Nama --}}
            <div class="row mb-2">
                <div class="col-xl-12">
                    <label class="form-label">
                        <span class="text-danger">*</span> Nama:
                    </label>
                    <select name="user_id" class="form-control @error('user_id') is-invalid @enderror">
                        <option selected disabled>~~ Pilih Nama ~~</option>
                        @foreach ($user as $item)
                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                        @endforeach
                    </select>
                    @error('user_id')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            {{-- Tugas --}}
            <div class="row mb-2">
                <div class="col-xl-12">
                    <label class="form-label">
                        <span class="text-danger">*</span> Tugas:
                    </label>
                    <textarea name="tugas" rows="4" class="form-control @error('tugas') is-invalid @enderror"></textarea>
                    @error('tugas')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            {{-- Tanggal Mulai --}}
            <div class="row mb-2">
                <div class="col-xl-12">
                    <label class="form-label">
                        <span class="text-danger">*</span> Tanggal Mulai:
                    </label>
                    <input type="date" name="tanggal_mulai" class="form-control @error('tanggal_mulai') is-invalid @enderror">
                    @error('tanggal_mulai')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            {{-- Tanggal Selesai --}}
            <div class="row mb-3">
                <div class="col-xl-12">
                    <label class="form-label">
                        <span class="text-danger">*</span> Tanggal Selesai:
                    </label>
                    <input type="date" name="tanggal_selesai" class="form-control @error('tanggal_selesai') is-invalid @enderror">
                    @error('tanggal_selesai')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            {{-- Tombol Simpan --}}
            <div>
                <button type="submit" class="btn btn-sm btn-primary">
                    <i class="fas fa-save mr-2"></i> Simpan
                </button>
            </div>

        </form>
    </div>
</div>
@endsection
