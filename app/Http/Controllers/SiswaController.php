<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 


class SiswaController extends Controller
{
    public function store(Request $request) {
        $request->validate([
            'name'         => 'required',
            'nisn'         => 'required',
            'alamat'       => 'required',
            'email'        => 'required',
            'password'     => 'required',
            'no_handphone' => 'required'
        ]);

        
        $datauser_store = [
            'clas_id'     => $request->kelas_id,
            'photo'        => 'foto.jpg', 
            'name'         => $request->name,
            'nisn'         => $request->nisn,
            'email'        => $request->email,
            'password'     => bcrypt($request->password), 
            'no_handphone' => $request->no_handphone
        ];
  
        User::create($datauser_store);
     
        return redirect('/');
    }
}
