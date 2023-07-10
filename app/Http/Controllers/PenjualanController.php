<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penjualan;
class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Penjualan::all();
        return view('penjualan.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('penjualan.add');
    }

    public function search(Request $request)
    {
        $keyword = $request->search;
        $rows = Penjualan::where('nama_pmbl', 'like', "%" . $keyword . "%")->paginate();
        return view('penjualan.index', compact('rows'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'no_pnjl' => 'bail|required|unique:tb_ikan',
            'nama_pmbl' => 'required'
        ],
        [
            'no_pnjl.required' => 'NO wajib diisi',
            'no_pnjl.unique' => 'Nama Tahun sudah ada',
            'nama_pmbl.required' => 'Nama wajib diisi'
        ]);
        
        Penjualan::create([
        'no_pnjl' => $request->no_pnjl,
        'nama_pmbl' => $request->nama_pmbl,
        'nama_ikan' => $request->nama_ikan,
        'harga' => $request->harga,
        'alamat' => $request->alamat
        ]);
        
        return redirect('penjualan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function lihat($id)
    {
        $row = Penjualan::findOrFail($id);
        return view('penjualan.lihat', compact('row'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = Penjualan::findOrFail($id);
        return view('penjualan.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'no_pnjl' => 'bail|required|unique:tb_ikan',
            'nama_pmbl' => 'required'
        ],
        [
            'no_pnjl.required' => 'NO wajib diisi',
            'no_pnjl.unique' => 'Nama Tahun sudah ada',
            'nama_pmbl.required' => 'Nama wajib diisi'
        ]);
        
        $row = Penjualan::findOrFail($id);
        $row->update([
        'no_pnjl' => $request->no_pnjl,
        'nama_pmbl' => $request->nama_pmbl,
        'nama_ikan' => $request->nama_ikan,
        'harga' => $request->harga,
        'alamat' => $request->alamat
        ]);
        
        return redirect('penjualan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Penjualan::findOrFail($id);
        $row->delete();
        return redirect('penjualan');
    }
}
