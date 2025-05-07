@extends('layout/app')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">
        <i class = "fas fa-plus"></i>
        {{ $title }}
    </h1>

    <div class="card">
        <div class="card-header bg-primary">
            <a href="{{ route('user') }}" class="btn btn-sm btn-warning"> 
                <i class="fas fa-arrow-left mr-2"></i>
                Kembali</a>
        </div>
        <div class="card-body">
            <form action="{{ route('userKirim') }}" method="post">
                @csrf
                <div class="row mb-2">
                    <div class="col-xl-6 mb-2">
                        <label class="form-label">
                            <span class="text-danger">*</span>
                            Nama :
                        </label>
                        <input type="text" name="nama" class="form-control @error('nama')  is-invalid @enderror" value="{{ old('nama') }}">
                        @error('nama')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>
                    <div class="col-xl-6 mb-1">
                        <label class="form-label">
                            <span class="text-danger">*</span>
                            Email :
                        </label>
                        <input type="email" name="email" class="form-control  @error('email')  is-invalid @enderror" value="{{ old('email') }}">
                        @error('email')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-xl-12 mb-1">
                        <label class="form-label">
                            <span class="text-danger">*</span>
                            Jabatan :
                        </label>
                        <select name="jabatan" class="form-control  @error('jabatan') is  is-invalid @enderror">
                            <option selected disabled>~~Pilih Jabatan~~</option>
                            <option value="Karyawan">Karyawan</option>
                            <option value="Admin">Admin</option>
                        </select>
                        @error('jabatan')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>
                </div>


                <div class="row mb-2">
                    <div class="col-xl-6">
                        <label class="form-label">
                            <span class="text-danger">*</span>
                            Passwowrd :
                        </label>
                        <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror">
                        @error('password')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>
                    <div class="col-xl-6 mb-1">
                        <label class="form-label">
                            <span class="text-danger">*</span>
                            Password konfirmasi :
                        </label>
                        <input type="password" name="password_confirmation" class="form-control @error('password') is-invalid @enderror">

                    </div>

                    <div>
                        <button type="submit" class="btn btn-sm btn-primary">
                            <i class="fas fa-save mr-2"></i>
                            Simpan
                        </button>
                    </div>
            </form>
        </div>
    </div>
@endsection
