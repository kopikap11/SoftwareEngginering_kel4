@extends('layout/app')

@section('content')
<style>
    body {
        background-color: #eef4ec;
    }

    h1.h3 {
        font-weight: bold;
        background: linear-gradient(to right, #4e342e, #6d9f71);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        animation: waveIn 1s ease-in-out;
    }

    .card {
        background-color: #fbfdfb;
        border: 1px solid #c8e6c9;
        box-shadow: 0 5px 15px rgba(85, 107, 47, 0.2);
        animation: floatIn 0.7s ease;
    }

    .card-header {
        background-color: #81c784;
        color: #1b5e20;
    }

    label.form-label {
        color: #2e7d32;
        font-weight: 600;
    }

    .btn-primary {
        background-color: #388e3c;
        border: none;
    }

    .btn-primary:hover {
        background-color: #2e7d32;
    }

    .btn-success {
        background-color: #a5d6a7;
        color: #1b5e20;
    }

    .btn-success:hover {
        background-color: #81c784;
        color: #fff;
    }

    input[type="date"],
    textarea {
        border: 1px solid #a5d6a7;
        border-radius: 5px;
    }

    input[disabled] {
        background-color: #dcedc8;
        color: #33691e;
        font-weight: bold;
        border: 1px dashed #aed581;
        text-align: center;
    }

    @keyframes floatIn {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes waveIn {
        0% {
            letter-spacing: -0.05em;
            transform: translateY(-10px);
            opacity: 0;
        }
        100% {
            letter-spacing: normal;
            transform: translateY(0);
            opacity: 1;
        }
    }
</style>

<h1 class="h3 mb-4">
    <i class="fas fa-clipboard"></i> {{-- Ikon beda untuk edit --}}
    {{ $title }}
</h1>

<div class="card">
    <div class="card-header">
        <a href="{{ route('tugas') }}" class="btn btn-sm btn-success">
            <i class="fas fa-arrow-left mr-2"></i> Kembali
        </a>
    </div>
    <div class="card-body">

        <form action="{{ route('tugasUpdate', $tugas->id) }}" method="post">
            @csrf

            {{-- Nama --}}
            <div class="row mb-2">
                <div class="col-xl-12 mb-1">
                    <label class="form-label">
                        <span class="text-danger">*</span> Nama:
                    </label>
                    <input type="text" value="{{ $tugas->user->nama }}" class="form-control" disabled>
                </div>
            </div>

            {{-- Tugas --}}
            <div class="row mb-2">
                <div class="col-xl-12 mb-2">
                    <label class="form-label">
                        <span class="text-danger">*</span> Tugas:
                    </label>
                    <textarea name="tugas" rows="5"
                        class="form-control @error('tugas') is-invalid @enderror">{{ $tugas->tugas }}</textarea>
                    @error('tugas')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            {{-- Tanggal Mulai --}}
            <div class="row mb-2">
                <div class="col-xl-12 mb-2">
                    <label class="form-label">
                        <span class="text-danger">*</span> Tanggal Mulai:
                    </label>
                    <input type="date" name="tanggal_mulai"
                        class="form-control @error('tanggal_mulai') is-invalid @enderror"
                        value="{{ $tugas->tanggal_mulai }}">
                    @error('tanggal_mulai')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            {{-- Tanggal Selesai --}}
            <div class="row mb-3">
                <div class="col-xl-12 mb-2">
                    <label class="form-label">
                        <span class="text-danger">*</span> Tanggal Selesai:
                    </label>
                    <input type="date" name="tanggal_selesai"
                        class="form-control @error('tanggal_selesai') is-invalid @enderror"
                        value="{{ $tugas->tanggal_selesai }}">
                    @error('tanggal_selesai')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            {{-- Tombol --}}
            <div>
                <button type="submit" class="btn btn-sm btn-primary">
                    <i class="fas fa-pen-fancy mr-2"></i> Update Tugas
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
