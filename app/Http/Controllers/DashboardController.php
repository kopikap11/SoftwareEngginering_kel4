<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'title'                    => 'Dashboard',
            'menuDashboard'            => 'active',
            'jumlahUser'               => User::count(),
            'jumlahAdmin'              => User::where('jabatan', 'admin')->count(),
            'jumlahKaryawan'           => User::where('jabatan', 'karyawan')->count(),
            'jumlahDitugaskan'         => User::where('jabatan', 'karyawan')->where('is_tugas', True)->count(),
            'jumlahBelumDitugaskan'    => User::where('jabatan', 'karyawan')->where('is_tugas', False)->count(),
        ];
        return view('dashboard', $data);
    }
}

