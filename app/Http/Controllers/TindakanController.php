<?php

namespace App\Http\Controllers;

use App\Models\Tindakan;
use Illuminate\Http\Request;

class TindakanController extends Controller
{
    public function index()
    {
        $tindakan = Tindakan::select('*')->orderBy('id', 'DESC')->get();
        return view('admin.main.tindakan.index', compact('tindakan'));
    }

    public function create()
    {
        return view('admin.main.tindakan.create');
    }

    public function store(Request $request)
    {
        $tindakan = new Tindakan;
        $tindakan->diagnosis = $request->diagnosis;
        $tindakan->deskripsi = $request->deskripsi;
        $tindakan->save();
        return redirect('/admin/tindakan')->with('success', 'Data tindakan berhasil ditambahkan');
    }

    public function show(Tindakan $tindakan)
    {
        return view('admin.main.tindakan.show', compact('tindakan'));
    }

    public function edit(Tindakan $tindakan)
    {
        return view('admin.main.tindakan.edit', compact('tindakan'));
    }

    public function update(Request $request, Tindakan $tindakan)
    {
        $tindakan_baru = Tindakan::find($tindakan->id);
        $tindakan_baru->diagnosis = $request->diagnosis;
        $tindakan_baru->deskripsi = $request->deskripsi;
        $tindakan_baru->save();
        return redirect('/admin/tindakan')->with('success', 'Data tindakan berhasil diubah');
    }

    public function destroy(Tindakan $tindakan)
    {
        $tindakan->delete();
        return redirect('/admin/tindakan')->with('success', 'Data tindakan berhasil dihapus');
    }
}
