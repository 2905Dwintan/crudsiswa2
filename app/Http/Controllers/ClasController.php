<?php

namespace App\Http\Controllers;

use App\Models\Clas;
use Illuminate\Http\Request;

class ClasController extends Controller
{
    public function index() {
        $kelas = Clas::all();
        return view('clas.index', compact('kelas'));
    }

    public function create() {
        return view('clas.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Clas::create($request->only('name', 'description'));

        return redirect()->route('index')->with('success', 'Kelas berhasil ditambahkan!');
    }

    public function edit($id) {
        $kelas = Clas::findOrFail($id);
        return view('clas.edit', compact('kelas'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $class = Clas::findOrFail($id);
        $class->name = $request->name;
        $class->description = $request->description;
        $class->save();

        return redirect()->route('index')->with('success', 'Kelas berhasil diperbarui!');
    }

    public function show($id){
        $kelas = Clas::findOrFail($id);
        return view('clas.show', compact('kelas'));
    }

    public function destroy($id) {
        $kelas = Clas::findOrFail($id);
        $kelas->delete();
        return redirect()->route('index')->with('success', 'Kelas berhasil dihapus!');
    }
}
