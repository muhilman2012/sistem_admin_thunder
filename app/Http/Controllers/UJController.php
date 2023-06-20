<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UJ;
use App\Models\Crew;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class UJController extends Controller
{
    public function index()
    {
        $uj = UJ::all();
        return view('uj.data', compact('uj'));
    }

    public function create()
    {
        $crewList = Crew::all();
        return view('uj.create', compact('crewList'));
    }

    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'nama_event' => 'required',
            'venue' => 'required',
            'tanggal_show' => 'required|date',
            'fee_pic' => 'nullable|numeric',
            'fee_operator' => 'nullable|numeric',
            'fee_transport' => 'nullable|numeric',
            'notes' => 'nullable|string',
            'crew_ids' => 'nullable|array',
            'crew_ids.*' => 'exists:crews,id',
        ]);

        $uj = new UJ();
        $uj->nama_event = $validatedData['nama_event'];
        $uj->venue = $validatedData['venue'];
        $uj->tanggal_show = $validatedData['tanggal_show'];
        $uj->fee_pic = $validatedData['fee_pic'];
        $uj->fee_operator = $validatedData['fee_operator'];
        $uj->fee_transport = $validatedData['fee_transport'];
        $uj->notes = $validatedData['notes'];

        $totalUangJalan = $uj->fee_pic + $uj->fee_operator + $uj->fee_transport;
        $uj->total_uang_jalan = $totalUangJalan;
        
        $uj->save();


        return redirect()->route('uj.data')->with('success', 'Data UJ berhasil ditambahkan.');
    }

    public function show($id)
    {
        $uj = UJ::with('Crew')->findOrFail($id);
        return view('uj.detail', compact('uj'));
    }

    public function edit($id)
    {
        $uj = UJ::findOrFail($id);
        $crewList = Crew::all();
        return view('uj.edit', compact('uj', 'crewList'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama_event' => 'required',
            'venue' => 'required',
            'tanggal_show' => 'required|date',
        ]);

        $uj = UJ::findOrFail($id);
        $uj->nama_event = $validatedData['nama_event'];
        $uj->venue = $validatedData['venue'];
        $uj->tanggal_show = $validatedData['tanggal_show'];
        $uj->save();

        return redirect()->route('uj.data')->with('success', 'Data UJ berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $uj = UJ::findOrFail($id);
        $uj->delete();

        return redirect()->route('uj.data')->with('success', 'Data UJ berhasil dihapus.');
    }
}
