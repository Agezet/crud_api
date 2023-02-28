<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = Barang::paginate(10);
        Log::info('GET method success called.');
        return response()->json([
            'data' => $barang,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $barang = Barang::create([
            'judulBarang' => $request->judulBarang,
            'deskripsiBarang' => $request->deskripsiBarang,
            'hargaBarang' => $request->hargaBarang
        ]);
        Log::info('POST method success called.');
        return response()->json([
            'data' => $barang,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barang = Barang::find($id);
        Log::info('GET method success called.');
        return response()->json([
            'data' => $barang,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(Barang $barang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $barang = Barang::find($id);
        $barang->judulBarang = $request->judulBarang;
        $barang->deskripsiBarang = $request->deskripsiBarang;
        $barang->hargaBarang = $request->hargaBarang;
        $barang->save();
        Log::info('PUT method success called.');
        return response()->json([
            'data' => $barang,
            'status' => 'update sukses'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang = Barang::find($id);
        $barang->delete();
        Log::info('DELETE method success called.');
        return response()->json([
            'status' => 'hapus sukses',
        ]);
    }
}
