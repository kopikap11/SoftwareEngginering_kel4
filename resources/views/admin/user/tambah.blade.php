@extends('layout/app')

@section('content')
    <style>
        /* === Global Style + Animasi === */
        .form-modern {
            background-color: #fff;
            padding: 24px;
            border-radius: 16px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
            animation: fadeInUp 0.7s ease;
        }

        .form-modern:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(0,0,0,0.08);
        }

        .form-label {
            font-weight: 600;
            color: #3E2723;
        }

        .form-control {
            transition: all 0.3s ease;
            border: 1px solid #ccc;
        }

        .form-control:focus {
            border-color: #3E2723;
            box-shadow: 0 0 0 3px rgba(62, 39, 35, 0.15);
        }

        .btn-modern {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            border-radius: 8px;
            padding: 8px 16px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .btn-primary-modern {
            background-color: #3E2723;
            color: #fff;
        }

        .btn-primary-modern:hover {
            background-color: #5D4037;
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        .btn-warning-modern {
            background-color: #FFA726;
            color: #fff;
        }

        .btn-warning-modern:hover {
            background-color: #FB8C00;
            transform: translateY(-1px);
        }

        .header-animated {
            animation: fadeSlideDown 0.7s ease;
        }

        @keyframes fadeSlideDown {
            0% { opacity: 0; transform: translateY(-20px); }
            100% { opacity: 1; transform: translateY(0); }
        }

        @keyframes fadeInUp {
            0% { opacity: 0; transform: translateY(30px); }
            100% { opacity: 1; transform: translateY(0); }
        }
    </style>

    <!-- Header Modern -->
    <div class="d-flex align-items-center mb-4 p-3 rounded shadow-sm header-animated" style="background: linear-gradient(to right, #3E2723, #5D4037); color: white;">
        <i class="fas fa-user-plus fa-2x mr-3"></i>
        <div>
            <h2 class="mb-0 font-weight-bold" style="font-size: 1.75rem;">{{ $title }}</h2>
            <small class="d-block mt-1">Tambah data pengguna dengan mudah dan modern</small>
        </div>
    </div>

    <div class="card form-modern">
        <div class="mb-3">
            <a href="{{ route('user') }}" class="btn btn-sm btn-warning-modern">
                <i class="fas fa-arrow-left mr-2"></i> Kembali
            </a>
        </div>

        <form action="{{ route('userKirim') }}" method="post">
            @csrf
            <div class="row mb-3">
                <div class="col-xl-6">
                    <label class="form-label"><span class="text-danger">*</span> Nama :</label>
                    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}">
                    @error('nama') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
                <div class="col-xl-6">
                    <label class="form-label"><span class="text-danger">*</span> Email :</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                    @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-xl-12">
                    <label class="form-label"><span class="text-danger">*</span> Jabatan :</label>
                    <select name="jabatan" class="form-control @error('jabatan') is-invalid @enderror">
                        <option selected disabled>~~ Pilih Jabatan ~~</option>
                        <option value="Karyawan">Karyawan</option>
                        <option value="Manajer">Manajer</option>
                        <option value="Admin">Admin</option>
                    </select>
                    @error('jabatan') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-xl-6">
                    <label class="form-label"><span class="text-danger">*</span> Password :</label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
                    @error('password') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
                <div class="col-xl-6">
                    <label class="form-label"><span class="text-danger">*</span> Konfirmasi Password :</label>
                    <input type="password" name="password_confirmation" class="form-control @error('password') is-invalid @enderror">
                </div>
            </div>

            <button type="submit" class="btn btn-modern btn-primary-modern">
                <i class="fas fa-save mr-2"></i> Simpan
            </button>
        </form>
    </div>
@endsection
