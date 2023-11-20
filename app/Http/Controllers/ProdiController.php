<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prodi = prodi::all();
        return view("prodi.index")-> with("prodi",$prodi);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $fakultas = Fakultas::all();
        return view("prodi.create")->with('fakultas',$fakultas);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
         $validasi = $request->validate([
        "nama" => "required|unique:prodis",
        "fakultas_id" => "required"
        ]);

       //simpan data kedalam tabel prodi
       Prodi::create($validasi);
       return redirect("prodi")->with("success","Data prodi berhasil disimpan");
    }

    /**
     * Display the specified resource.
     */
    public function show(Prodi $prodi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prodi $prodi)
    {
        $fakultas = Fakultas::all();
        return view("prodi.edit")
                            ->with('fakultas',$fakultas)
                            ->with('prodi', $prodi);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prodi $prodi)
    {
        $validasi = $request->validate([
            'nama' => 'required',
            'fakultas_id' => 'required'
        ]);
        $prodi->update($validasi);
        return redirect('prodi')->with('success','Data program studi berhasil disimpan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prodi $prodi)
    {
        //
        $prodi->delete();
        return redirect()->route('prodi.index')->with('success', 'Prodi '. $prodi->nama.' berhasil dihapus.');
    }
}
