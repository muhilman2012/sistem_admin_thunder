<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crew;

class crewController extends Controller
{
    public function index()
    {
        $crewList = Crew::all();

        // Menampilkan view form uj beserta data crew
        return view('crew.data', compact('crewList'));
    }
    public function create()
    {
        return view('crew.create');
    }
    public function detail()
    {
        //$data = members::find($id);
        //$address = MembersAddress::where('members_id', $id)->first();
        //$ctg = MembersCategories::where('members_id', $id)->first();
        //$doc = MembersDocuments::where('members_id', $id)->first();
        //$permission = MembersPermissions::where('members_id', $id)->first();
        //return view('admin.members.detail', [
        //    'data' => $data,
        //    'address' => $address,
        //    'ctg' => $ctg,
        //    'doc' => $doc,
        //    'ps' => $permission
        //]);
        return view('crew.detail');
    }
    public function store(Request $request)
    {
        // Validasi inputan jika diperlukan

        $crew = new crew;
        $crew->nama_crew = $request->input('nama_crew');
        $crew->divisi_crew = $request->input('divisi_crew');
        $crew->nominal_fee = $request->input('nominal_fee');
        // Setel kolom lainnya sesuai kebutuhan
        $crew->save();

        return redirect()->route('crew.data')->with('success', 'Data Crew berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $crew = crew::findOrFail($id);
        return view('crew.edit', compact('crew'));
    }

    public function update(Request $request, $id)
    {
        // Validasi inputan jika diperlukan

        $crew = crew::findOrFail($id);
        $crew->nama_crew = $request->input('nama_crew');
        $crew->divisi_crew = $request->input('divisi_crew');
        $crew->nominal_fee = $request->input('nominal_fee');
        // Setel kolom lainnya sesuai kebutuhan
        $crew->save();

        return redirect()->route('crew.data')->with('success', 'Data Crew berhasil diperbarui.');
    }

    public function destroy($crew_id)
    {
        $crew = crew::findOrFail($crew_id);
        $crew->delete();

        return redirect()->route('crew.data')->with('success', 'Data Crew berhasil dihapus.');
    }
}
