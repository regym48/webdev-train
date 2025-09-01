<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Simulasi;
use App\Http\Requests\SimulasiRequest;

class SimulasiController extends Controller
{
    public function index()
    {
        $simulasis = Simulasi::paginate(10);
        return view('simulasis.index',[
            'simulasis' => $simulasis
        ] );
    }

    public function create()
    {
        return view('simulasis.create');
    }

    public function edit(Simulasi $simulasi)
    {
        return view('simulasis.edit',[
            'simulasi' => $simulasi
        ]);
    }

    public function store(SimulasiRequest $request)
    {
        Simulasi::create($request->validated());
        return redirect()->route('simulasis.index')->with('success', 'Simulasi berhasil ditambahkan!');

    }

    public function update(SimulasiRequest $request, Simulasi $simulasi)
    {
        $simulasi->update($request->validated());
        return redirect()->route('simulasis.index')->with('success', 'Simulasi berhasil diperbarui!');
    }

    public function destroy(Simulasi $simulasi)
    {
        $simulasi->delete();

        return to_route('simulasis.index')->with('success', 'Simulasi berhasil Dihapus!');
    }
}
