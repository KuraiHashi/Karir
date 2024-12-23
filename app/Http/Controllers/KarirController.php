<?php

namespace App\Http\Controllers;

use App\Models\Karir;
use Illuminate\Http\Request;

class KarirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $karir = Karir::all();
        return view('karir.index', compact('karir'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kota = [
            'Jakarta',
            'Bandung',
            'Pekanbaru',
            'Aceh',
        ];
        $bidang = [
            'IT',
            'Marketing',
            'Management',
            'Mekanik',
        ];
        return view('karir.daftar', compact('kota', 'bidang'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'kota' => 'required',
            'bidang' => 'required',
            'skill' => 'required|string|max:255',
            'pengalaman' => 'required|string|max:255',
        ]);
        $validated = [
            'name' => $request->name,
            'kota' => $request->kota,
            'bidang' => $request->bidang,
            'skill' => $request->skill,
            'pengalaman' => $request->pengalaman,
        ];
        Karir::create($validated);
        return redirect('/karir')->with('sukses', 'Selamat anda sekarang telah terdaftar di KarirKu!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $karir = Karir::findOrFail($id);
        return view('karir.detail', compact('karir'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
