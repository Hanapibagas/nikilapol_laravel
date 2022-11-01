<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Syaratdridel;
use App\Models\Syaratdrihed;
use Illuminate\Http\Request;

class DriveSyaratDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drevsyaratdetail = Syaratdridel::all();

        return view('panel.persyaratan.driver.details.index', compact('drevsyaratdetail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.persyaratan.driver.details.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Syaratdridel $drevsyaratdetail)
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

        $drevsyaratdetail->create($input);

        return redirect()->route('syarat-detail.index')->with(['Sukses menambahkan data']);
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
        $drevsyaratdetail = Syaratdridel::findOrFail($id);

        return view('panel.persyaratan.driver.details.edit', compact('drevsyaratdetail'));
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

        $drevsyaratdetail = Syaratdridel::findOrFail($id);
        $drevsyaratdetail->update($input);

        return redirect()->route('syarat-detail.index')->with(['Sukses menambahkan data']);
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
