<?php

namespace App\Http\Controllers;

use App\Models\bayi;
use Illuminate\Http\Request;

class bayiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bayi = bayi::all();
        return view('bayi.index', [
            'bayi' => $bayi
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bayi.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'tanggalLahir' => 'required',
            'namaIbu' => 'required',
            'namaAyah' => 'required',
            'alamat' => 'required',
        ]);

        bayi::create($request->all());
        return redirect()->route('bayi.index')->with('success', 'Data bayi berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $bayi = bayi::findOrFail($id);
        return view('bayi.show', compact('bayi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $bayi = bayi::findOrFail($id);
        return view('bayi.edit', compact('bayi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $bayi = bayi::findOrFail($id);

        $request->validate([
            'nama' => 'required',
            'tanggalLahir' => 'required',
            'namaIbu' => 'required',
            'namaAyah' => 'required',
            'alamat' => 'required',
        ]);

        $bayi->update($request->all());
        return redirect()->route('bayi.index')->with('success', 'Data Bayi berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    $bayi = bayi::findOrFail($id); // Ambil data bayi berdasarkan ID
    $bayi->delete(); // Hapus data
    return redirect()->route('bayi.index')->with('success', 'Data Bayi berhasil dihapus.');
    }
}
