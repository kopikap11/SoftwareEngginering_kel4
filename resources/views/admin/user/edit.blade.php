@extends('layout/app')

@section('content')
    <h1 class="h3 mb-4 text-white text-center py-3"
        style="background: linear-gradient(to right, #4E342E, #6D4C41); border-radius: 15px;">
        <i class="fas fa-user-edit mr-2"></i>
        {{ $title }}
    </h1>

    <div class="card shadow" style="border-radius: 20px; background: linear-gradient(to bottom right, #F3E5AB, #EDE0D4);">
        <div class="card-header d-flex justify-content-start" style="
            background: linear-gradient(to right, #8D6E63, #4E342E);
            color: white;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;">
            <a href="{{ route('user') }}" class="btn btn-sm" style="background-color: #4DB6AC; color: white;">
                <i class="fas fa-arrow-left mr-2"></i> Kembali
            </a>
        </div>

        <div class="card-body px-4">
            <form action="{{ route('userUpdate', $user->id) }}" method="post">
                @csrf
                <div class="row mb-3">
                    <div class="col-md-6 mb-3">
                        <label class="font-weight-bold">Nama <span class="text-danger">*</span></label>
                        <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror"
                               value="{{ $user->nama }}" placeholder="Masukkan nama lengkap">
                        @error('nama')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="font-weight-bold">Email <span class="text-danger">*</span></label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                               value="{{ $user->email }}" placeholder="Masukkan email aktif">
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-12 mb-3">
                        <label class="font-weight-bold">Jabatan <span class="text-danger">*</span></label>
                        <select name="jabatan" class="form-control @error('jabatan') is-invalid @enderror">
                            <option disabled selected>~~ Pilih Jabatan ~~</option>
                            <option value="Admin" {{ $user->jabatan == 'admin' ? 'selected' : '' }}>Admin</option>
                            <option value="Karyawan" {{ $user->jabatan == 'karyawan' ? 'selected' : '' }}>Karyawan</option>
                        </select>
                        @error('jabatan')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-6 mb-3">
                        <label class="font-weight-bold">Password Baru</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                               placeholder="Isi jika ingin mengganti">
                        @error('password')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="font-weight-bold">Konfirmasi Password</label>
                        <input type="password" name="password_confirmation" class="form-control @error('password') is-invalid @enderror"
                               placeholder="Ulangi password baru">
                    </div>
                </div>

                <div class="text-right">
                    <button type="submit" class="btn btn-sm" style="background-color: #FFB300; color: white;">
                        <i class="fas fa-save mr-2"></i> Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
