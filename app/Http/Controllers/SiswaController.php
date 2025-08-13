<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Clas;
use Illuminate\Support\Facades\Storage;

class SiswaController extends Controller
{
    public function index() {
        $siswas = User::all();
        return view('siswa.index', compact('siswas'));
    }

    public function create() {
        $clases = Clas::all();
        return view('siswa.create', compact('clases'));
    }

    public function store(Request $request) {
        $request->validate([
            'name'         => 'required',
            'nisn'         => 'required|unique:users',
            'email'        => 'required|email|unique:users,email',
            'password'     => 'required|min:6',
            'no_handphone' => 'required|unique:users,no_handphone',
            'photo'        => 'nullable|image|max:2048'
        ]);

        $datauser_store = [
            'clas_id'      => $request->kelas_id,
            'name'         => $request->name,
            'nisn'         => $request->nisn,
            'email'        => $request->email,
            'password'     => bcrypt($request->password),
            'no_handphone' => $request->no_handphone
        ];

        if ($request->hasFile('photo')) {
            $datauser_store['photo'] = $request->file('photo')->store('profilesiswa', 'public');
        }

        User::create($datauser_store);

        return redirect('/');
    }

    public function destroy($id) {
        $datauser = User::find($id);

        if ($datauser) {
            if ($datauser->photo) {
                Storage::disk('public')->delete($datauser->photo);
            }
            $datauser->delete();
        }

        return redirect('/');
    }

    public function show($id) {
        $datauser = User::find($id);
         
        if (!$datauser) {
            return redirect('/');
        }

        return view('siswa.show', compact('datauser'));
    }
 

 public function edit( $id ){
        //siapkan data atau panggil kelas
        $clases =clas::all();

        //ambil data user atau siswa di tabel user berdasar kan id
        $datauser =user::find($id);
        
        //cek apakah datanya ada atau tidak
        if($datauser == null){
            return redirect('/');
            
        }

        return view('siswa.edit',compact('clases', 'datauser'));
        
    }

    //
    public function update(Request $request,$id){
        //validasi data
        $request->validate([
            'name'         =>      'required',
            'nisn'         =>      'required',
            'alamat'       =>      'required',
            'email'        =>      'required',
            'no_handphone' =>      'required',
        ]);
        

        //cari apakah ada user di tabel yang akan di update cari sesuai id
        $datasiswa = user::find($id);  
    
        //siapkan data yang akan disimpan sebagai update
        $datasiswa_update = [
            'clas_id'       =>$request->kelas_id,
            'name'          =>$request->name,
            'nisn'          =>$request->nisn,
            'alamat'        =>$request->alamat,
            'email'         =>$request->email,
            'no_handphone'  =>$request->no_handphone,
      
        ];

        //cek apakah user update password atau tidak
        if ($request->password !=null) {
              $datasiswa_update['password'] = $request->password;
        }

        //cek apakah user update foto atau tidak
        if ($request->hasfile('foto')) {

            //hapus file gambar sebelumnya dari file
            storage::disk('public')->delete($datasiswa->photo);

            //update gambar baru
            $datasiswa_update['photo'] = $request->file('foto')->store('profilesiswa','public');

        }


        //simpan data ke dalam base dengan data yang terbaru sesuai id
        $datasiswa->update($datasiswa_update);

        //simpan data ke halaman beranda
        return redirect('/');
    }
}
    public function edit($id) {
        $clases = Clas::all();
        $datauser = User::find($id);

        if (!$datauser) {
            return redirect('/');
        }

        return view('siswa.edit', compact('clases', 'datauser'));
    }

    public function update(Request $request, $id) {
        $datasiswa = User::find($id);

        if (!$datasiswa) {
            return redirect('/');
        }

        $request->validate([
            'name'         => 'required',
            'nisn'         => 'required|unique:users,nisn,' . $id,
            'email'        => 'required|email|unique:users,email,' . $id,
            'no_handphone' => 'required|unique:users,no_handphone,' . $id,
            'photo'        => 'nullable|image|max:2048',
            'password'     => 'nullable|min:6' // password opsional
        ]);

        $datauser_update = [
            'clas_id'      => $request->kelas_id,
            'name'         => $request->name,
            'nisn'         => $request->nisn,
            'email'        => $request->email,
            'no_handphone' => $request->no_handphone
        ];

        // Ubah password hanya jika diisi
        if (!empty($request->password)) {
            $datauser_update['password'] = bcrypt($request->password);
        }

        // Ubah foto jika diupload
        if ($request->hasFile('photo')) {
            if ($datasiswa->photo) {
                Storage::disk('public')->delete($datasiswa->photo);
            }
            $datauser_update['photo'] = $request->file('photo')->store('profilesiswa', 'public');
        }

        $datasiswa->update($datauser_update);

        return redirect('/');
    }
}
