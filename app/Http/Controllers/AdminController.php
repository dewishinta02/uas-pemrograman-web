<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $admin = Admin::all();
        return view('admin.index', compact('admin'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_admin' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'no_hp' => 'required',
        ]);
        $data = $request->all();

        admin::create($data);

        return redirect()->route('admin.index')->with('success', 'Admin berhasil ditambahkan.');
    }

    public function edit(Admin $admin)
    {
        return view('admin.edit', compact('admin'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_admin' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'no_hp' => 'required',
    ]);
    $admin = Admin::findOrFail($id);
        $data = $request->all();

        $admin->update($data);
        return redirect()->route('admin.index')->with('success', 'admin berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $admin = Admin::findOrFail($id);

        $admin->delete();

        return redirect()->route('admin.index')->with('success', 'Admin berhasil dihapus.');
    }
}
