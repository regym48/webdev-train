<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materi;
use App\Http\Requests\MateriRequest;

use App\Models\Simulasi;

class MateriController extends Controller
{
    public function index()
    {
        $materis = Materi::with('simulasi')->paginate(10);
        return view('materis.index',[
            'materis' => $materis
        ] );
    }

    public function create()
    {
        return view('materis.create',[
            'simulasis' => Simulasi::all()
        ]);
    }

    public function edit(Materi $materi)
    {
        return view('materis.edit',[
            'materi' => $materi,
            'simulasis' => Simulasi::all()
        ]);
    }

    public function store(MateriRequest $request)
    {
        Materi::create($request->validated());
        return redirect()->route('materis.index')->with('success', 'Materi berhasil ditambahkan!');

    }

    public function update(MateriRequest $request, Materi $materi)
    {
        $materi->update($request->validated());
        return redirect()->route('materis.index')->with('success', 'Materi berhasil diperbarui!');
    }

    public function destroy(Materi $materi)
    {
        $materi->delete();

        return to_route('materis.index')->with('success', 'Materi berhasil Dihapus!');
    }
}
