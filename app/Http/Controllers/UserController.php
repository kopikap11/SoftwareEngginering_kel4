<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Exports\UserExport;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    public function index(){
        $data = array(
            'title'         => 'Data User',
            'menuAdminUser' => 'active',
            'user'          => User::orderBy('jabatan','asc')->get(),
        );
        return view('admin/user/index', $data);
    }

    public function tambah(){
        $data = array(
            'title'         => 'Tambah Data User',
            'menuAdminUser' => 'active',
        );
        return view('admin/user/tambah', $data);
    }

    public function kirim(Request $request){
        $request->validate([
            'nama'      => 'required',
            'email'     => 'required|unique:users,email',
            'jabatan'   => 'required',
            'password'  => 'required|confirmed|min:8',
        ],[
            'nama.required'         => 'Nama tidak boleh kosong',
            'email.required'        => 'Email tidak boleh kosong',
            'email.unique'          => 'Email sudah terdaftar',
            'jabatan.required'      => 'wajib isi jabatan',
            'password.required'     => 'Password tidak boleh kosong',
            'password.confirmed'    => 'Password tidak sama',
            'password.min'          => 'Password minimal 8 karakter',
        ]);

        $user = new User();
        $user->nama         = $request->nama;
        $user->email        = $request->email;
        $user->jabatan      = $request->jabatan;
        $user->password     = Hash::make($request->password);
        $user->is_tugas     = false;
        $user->save();

        return redirect()->route('user')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id){
        $data = array(
            'title'         => 'Edit Data User',
            'menuAdminUser' => 'active',
            'user'          => User::findOrFail($id),
        );
        return view('admin/user/edit', $data);
    }

    public function update(Request $request, $id){
        $request->validate([
            'nama'      => 'required',
            'email'     => 'required|unique:users,email,' .$id,
            'jabatan'   => 'required',
            'password'  => 'nullable|confirmed|min:8',
        ],[
            'nama.required'         => 'Nama tidak boleh kosong',
            'email.required'        => 'Email tidak boleh kosong',
            'email.unique'          => 'Email sudah terdaftar',
            'jabatan.required'      => 'wajib isi jabatan',
            'password.confirmed'    => 'Password tidak sama',
            'password.min'          => 'Password minimal 8 karakter',
        ]);

        $user = User::findOrFail($id);
        $user->nama         = $request->nama;
        $user->email        = $request->email;
        $user->jabatan      = $request->jabatan;
        if($request->filled('password')){
            $user->password     = Hash::make($request->password);
        }
        $user->save();

        return redirect()->route('user')->with('success', 'Data berhasil di ubah');
    }

    public function destroy($id){
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('user')->with('success', 'Data berhasil di hapus');
    }

     public function excell(){
        $filename = now()->format('d-m-Y_H.i.s');
        return Excel::download(new UserExport, 'DataUser_'.$filename.'.xlsx');

     }
     public function pdf(){
        $filename = now()->format('d-m-Y_H.i.s');
        $data=  array(
            'user' => User::get(),
            'tanggal'  => now()->format('d-m-Y'),
            'jam'  => now()->format('H.i.s'),
        );

        $pdf = Pdf::loadView('admin/user/pdf', $data);
        return $pdf-> setPaper('a4', 'landscape')->stream('DataUser_'.$filename.'.pdf');
     }

}
