<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Syaratmerdel;
use Illuminate\Http\Request;

class MerchanSyaratDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mersyaratdetail = Syaratmerdel::all();

        return view('panel.persyaratan.merchant.detail-persyaratan.index', compact('mersyaratdetail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.persyaratan.merchant.detail-persyaratan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Syaratmerdel $mersyaratdetail)
    {
        $input = $request->all();

        if ($gambar = $request->file('gambar')) {
            $destinationPath = 'image/';
            $gambarName = $gambar->getClientOriginalName();
            $gambar->move($destinationPath, $gambarName);
            $input['gambar'] = $gambarName;
        } else {
            unset($input['gambar']);
        }

        $mersyaratdetail->create($input);

        return redirect()->route('syarat-details.index')->with(['Sukses menambahkan data']);
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mersyaratdetail = Syaratmerdel::findOrFail($id);
        return view('panel.persyaratan.merchant.detail-persyaratan.edit', compact('mersyaratdetail'));
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
        $input = $request->all();

        if ($gambar = $request->file('gambar')) {
            $destinationPath = 'image/';
            $gambarName = $gambar->getClientOriginalName();
            $gambar->move($destinationPath, $gambarName);
            $input['gambar'] = $gambarName;
        } else {
            unset($input['gambar']);
        }

        $mersyaratdetail = Syaratmerdel::findOrFail($id);
        $mersyaratdetail->update($input);

        return redirect()->route('syarat-details.index')->with(['Sukses menambahkan data']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
