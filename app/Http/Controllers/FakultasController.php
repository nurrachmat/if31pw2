<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use Illuminate\Http\Request;

class FakultasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $fakultas = Fakultas::all();
        //Select * From fakultas
        //dd($fakultas);
        return view("fakultas.index") ->with ("fakultas", $fakultas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("fakultas.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       //dd($request);
       //validasi data input
       $validasi = $request->validate([
        "nama" => "required|unique:fakultas"
        ]);
       //simpan data kedalam tabel fakultas
       Fakultas::create($validasi);
       return redirect("fakultas")->with("success","Data fakultas berhasil disimpan");
    }

    /**
     * Display the specified resource.
     */
    public function show(Fakultas $fakultas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $fakultas = Fakultas::find($id); 
        return view("fakultas.edit")->with("fakultas", $fakultas);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validasi = $request->validate([
            'nama' => 'required'
        ]);
        Fakultas::find($id)->update($validasi);
        return redirect('fakultas')->with('success','Fakultas berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // dd($id);
        $fakultas = Fakultas::find($id);
        $fakultas->delete();
        return redirect()->route('fakultas.index')->with('success', 'Fakultas '. $fakultas->nama.' berhasil dihapus.');
    }
}
