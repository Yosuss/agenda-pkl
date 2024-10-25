<?php

namespace App\Http\Controllers;

use App\Models\agendaModel;
use Illuminate\Http\Request;

class agendaController extends Controller
{
    //
    public function index()
    {
        $agenda = agendaModel::paginate(4);
        // $agenda = agendaModel::all();
        return view('agenda.agenda', compact('agenda'));
    }

    public function tambah(Request $request)
    {
        $request->validate([
            'tanggal' => 'required',
            'kegiatan' => 'required',
        ], [
            'tanggal.required' => 'tanggal harus diisi.',
            'kegiatan.required' => 'kegiatan harus diisi.',
        ]);

        // simpan data ( simple )
        $data = new agendaModel();
        $data->tanggal = $request->tanggal;
        $data->kegiatan = $request->kegiatan;
        $data->save();

        return redirect()->route('agenda')->with('success', 'inputan berhasil ditambahkan');
    }

    public function hapus($id)
    {
        try {
            agendaModel::where('id_agenda', $id)->delete();
            return to_route('agenda');
        } catch (\Exception $e) {
            return to_route('agenda')->withErrors('gagal hapus');
        }
    }

    public function edit(Request $request, $id)
    {
        $agenda = agendaModel::findOrFail($id);
        return view('agenda.edit-agenda', compact('agenda'));
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'tanggal' => 'required',
            'kegiatan' => 'required',
        ],[
            'tanggal.required' => 'tanggal harus diisi.',
            'kegiatan.required' => 'kegiatan harus diisi.',
        ]);

        $agenda = agendaModel::findOrFail($id);
        try {
            $agenda->tanggal = $request->tanggal;
            $agenda->kegiatan = $request->kegiatan;
            $agenda->save();
                return redirect()->route('agenda');
        } catch (\Exception $e) {
            return redirect()->route('agenda')->withErrors('Gagal mengupdate data.');
        }
        return redirect()->route('agenda')->with('success', 'inputan berhasil ditambahkan');
    }
}