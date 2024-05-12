<?php

namespace App\Http\Controllers;

use App\Models\ahmad_rizki_sabani;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\View\view;
use Illuminate\Http\RedirectResponse;
use Symfony\Contracts\Service\Attribute\Required;

class AhmadRizkiSabaniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): view
    {
        $dataArray = ahmad_rizki_sabani::latest()->paginate(10);
        return view('crud', compact('dataArray'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): view
    {
        return view('tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nim' => 'required|min: 5',
            'nama' => 'required|min: 10',
            'kelas' => 'required|min: 4',
            'jenis_kelamin' => 'required|min: 5'

        ]);
        ahmad_rizki_sabani::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'jenis_kelamin' => $request->jenis_kelamin
        ]);
        return redirect()->route('ahmad_rizki_sabani.index')->with(['success' => 'Data berhasil disimpan']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): view
    {
        $data = ahmad_rizki_sabani::findOrFail($id);
        return view('detail', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): view
    {
        $data = ahmad_rizki_sabani::findOrFail($id);
        return view('update', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'nim' => 'required|min: 5',
            'nama' => 'required|min: 10',
            'kelas' => 'required|min: 4',
            'jenis_kelamin' => 'required|min: 5'
        ]);
        $data = ahmad_rizki_sabani::findOrFail($id);
        $data->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'jenis_kelamin' => $request->jenis_kelamin
        ]);
        return redirect()->route('ahmad_rizki_sabani.index')->with(['success' => 'data berhasil diubah']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        $data = ahmad_rizki_sabani::findOrFail($id);
        $data->delete();
        return redirect()->route('ahmad_rizki_sabani.index')->with(['success' => 'data berhasil dihapus']);
    }
}
