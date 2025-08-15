<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clas;
use App\Models\User;

class ClasController extends Controller
{
    public function index()
    {
        $clases = Clas::all();
        return view('kelas.index', compact('clases'));
    }

    public function create()
    {
        $clases = Clas::all();
        return view('kelas.create', compact('clases'));
    }
    public function store(request $request)
    {
        //validasi
        $request->validate([
            'name'       => 'required',
            'description'    => 'required',
        ]);

        //siapkan data
        $dataclas_store = [
    'name' => $request->name,
    'description' => $request->description,
];

        //siapkan ke DB
        Clas::create($dataclas_store);

        return redirect('/kelas')->with('succes', 'data kelas berhasil di tambahkan');

    }

    public function destroy($id)
{
    $datakelas = Clas::find($id);

    if ($datakelas) {
        $datakelas->delete();
        return redirect('/kelas')->with('success', 'Kelas berhasil dihapus');
    }

    return redirect('/kelas')->with('error', 'Kelas tidak ditemukan');
}
 public function show($id){
        //cari data kelas berdasarkan id
        $dataclass = Clas::find($id);

        //cek apakah data kelas ada atau tidak
         if($dataclass == null){
            return redirect('/kelas')->with('error', 'Data siswa tidak ditemukan');
        }
        //kembalikan data kelas ke halaman show
        return view('kelas.show', compact('dataclass'));

    }
     public function edit($id){
        //cari data kelas berdasarkan id
        $datakelas = Clas::find($id);

        //cek apakah data kelas ada atau tidak
        if($datakelas == null){
            return redirect('/kelas')->with('error', 'Data kelas tidak ditemukan');
        }

        //kembalikan data kelas ke halaman edit
        return view('kelas.edit', compact('datakelas'));
    }
      public function update(Request $request, $id){
        //validasi data
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        //cari data kelas berdasarkan id
        $datakelas = Clas::find($id);

        if($datakelas == null){
            return redirect('/kelas')->with('error', 'Data kelas tidak ditemukan');
        }

        //siapkan data yang akan diupdate
        $datakelas_update = [
            'name'          => $request->name,
            'description'   => $request->description,
        ];

        //update data kelas
        $datakelas->update($datakelas_update);

        //arahkan user ke halaman index kelas
        return redirect('/kelas')->with('success', 'Kelas berhasil diupdate');
    }


}