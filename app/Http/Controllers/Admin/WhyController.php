<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mengapa;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class WhyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mengapa = Mengapa::all();

        return view('panel.driver.mengapa.index', compact('mengapa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.driver.mengapa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Mengapa $mengapa)
    {
        $input = $request->all();

        if ($gambar = $request->file('gambar')) {
            $destinationPath = 'image/';
            $gambarName = Str::random(3) . "-" . date('Ymd') . "." . $gambar->getClientOriginalExtension();
            $gambar->move($destinationPath, $gambarName);
            $input['gambar'] = $gambarName;
        } else {
            unset($input['gambar']);
        }
        $mengapa->create($input);

        return redirect()->route('driver-mengapa.index')->with(['Sukses menambahkan data']);
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
        $mengapa = Mengapa::findOrFail($id);
        return view('panel.driver.mengapa.edit', compact('mengapa'));
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
            $gambarName = Str::random(3) . "-" . date('Ymd') . "." . $gambar->getClientOriginalExtension();
            $gambar->move($destinationPath, $gambarName);
            $input['gambar'] = $gambarName;
        } else {
            unset($input['gambar']);
        }
        $mengapa = Mengapa::findOrFail($id);
        $mengapa->update($input);

        return redirect()->route('driver-mengapa.index')->with(['Sukses menambahkan data']);
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
