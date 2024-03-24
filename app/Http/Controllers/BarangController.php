<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    // Menampilkan semua data barang
    public function index()
    {
        $barangs = Barang::all();
        return view('crud.index', compact('barangs'));
    }

    // Menampilkan form untuk menambahkan barang baru
    public function create()
    {
        return view('crud.create');
    }

    // Menyimpan barang baru ke dalam database
    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|integer'
        ]);

        Barang::create($request->all());

        return redirect()->route('crud.index')
            ->with('success', 'Barang berhasil ditambahkan.');
    }

    // Menampilkan data barang berdasarkan ID
    public function show($id)
    {
        $barang = Barang::findOrFail($id);
        return view('crud.show', compact('barang'));
    }

    // Menampilkan form untuk mengedit data barang
    public function edit($id)
    {
        $barang = Barang::findOrFail($id);
        return view('crud.edit', compact('barang'));
    }

    // Menyimpan perubahan data barang ke dalam database
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_barang' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|integer'
        ]);

        $barang = Barang::findOrFail($id);
        $barang->update($request->all());

        return redirect()->route('crud.index')
            ->with('success', 'Barang berhasil diperbarui.');
    }

    // Menghapus data barang dari database
    public function destroy($id)
    {
        $barang = Barang::findOrFail($id);
        $barang->delete();

        return redirect()->route('crud.index')
            ->with('success', 'Barang berhasil dihapus.');
    }
}
