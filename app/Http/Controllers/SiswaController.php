<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Clas;
use Illuminate\Support\Facades\Storage;

class SiswaController extends Controller
{
    public function index() {
        // siapkan data siseas
        $siswas = User::all();
        return view('siswa.index', compact('siswas'));
    }

    public function create() {
        $clases = Clas::all();
        return view('siswa.create', compact('clases'));
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'nisn' => 'required | unique:users',
            'email' => 'required | unique:users,email',
            'password' => 'required',
            'no_handphone' => 'required | unique:users,no_handphone'
        ]);

        $datauser_store = [
            'clas_id' => $request->kelas_id,
            'name' => $request->name,
            'nisn' => $request->nisn,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'no_handphone' => $request->no_handphone
        ];

        $datauser_store['photo'] = $request->file('photo')->store('profilesiswa', 'public');

        User::create($datauser_store);

        return redirect('/');
    }

    // fungsi delete
    public function destroy($id){
        //cari user di dalam database berdasarkan id yang dikirimkan 
        $datauser = User::find($id);

        //lakukan delete pada data tersebut jika data user tersebut ada 
        if ($datauser !=null) {
            storage::disk('public')->delete($datauser->photo);
            $datauser->delete();
        }

        // kembalikan user ke halaman beranda / home
        return redirect('/');
    }

    public function show($id) {
        // cari data siswa di dalam tabel user dengan id yang di kirimkan 
        $datauser = User::find($id);
         
        // cek apakah ada data atau tidak 
        if ($datauser ==null) {
         return redirect('/');
        }
   // pindah user ke halaman detail siswa dengan mengirimkan data detailnya
        return view('siswa.show', compact('datauser'));
    }


    public function edit($id){
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
        $datasiswa_update =[
            'clas_id'       =>$request->kelas_id,
            'name'          =>$request->name,
            'nisn'          =>$request->nisn,
            'alamat'        =>$request->alamat,
            'email'         =>$request->email,
            'no_handphone'  =>$request->no_handphone,
      
        ];

        //simpan data ke dalam base dengan data yang terbaru sesuai id
        $datasiswa->update($datasiswa_update);

        //simpan data ke halaman beranda
        return redirect('/');
    }
}