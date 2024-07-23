<?php

namespace App\Http\Controllers;

use App\Models\Direktur;
use Illuminate\Http\Request;

class DirekturController extends Controller
{
    public function index()
    {
        $direktur = Direktur::all();
        return view('direktur.index', compact('direktur'));
    }

    public function create()
    {
        return view('direktur.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_direktur' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
        ]);
        $data = $request->all();

        Direktur::create($data);

        return redirect()->route('direktur.index')->with('success', 'Direktur berhasil ditambahkan.');
    }

    public function edit(Direktur $direktur)
    {
        return view('direktur.edit', compact('direktur'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_direktur' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
    ]);
    $direktur = Direktur::findOrFail($id);
        $data = $request->all();

        $direktur->update($data);
        return redirect()->route('direktur.index')->with('success', 'direktur berhasil diperbarui.');
}


public function destroy($id)
{
    $direktur = Direktur::findOrFail($id);

    $direktur->delete();

    return redirect()->route('direktur.index')->with('success', 'Direktur berhasil dihapus.');
}
}

