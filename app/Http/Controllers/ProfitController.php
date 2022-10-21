<?php

namespace App\Http\Controllers;

use App\Models\Profit;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProfitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profit = Profit::all();
        return view('panel.profit.index', compact('profit'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $profit
     * @return \Illuminate\Http\Response
     */
    public function show(Profit $profit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $profit
     * @return \Illuminate\Http\Response
     */
    public function edit(Profit $profit)
    {
        return view('panel.profit.edit', compact('profit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $profit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profit $profit)
    {
        //validate form
        $this->validate($request, [
            'title'     => 'required|min:2',
            'description'     => 'required|min:5',
            // 'gambar'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        //check if image is uploaded
        if ($gambar = $request->file('gambar')) {
            $destinationPath = 'image/';
            $gambarName = Str::random(3) . "-" . date('Ymd') . "." . $gambar->getClientOriginalExtension();
            $gambar->move($destinationPath, $gambarName);
            $input['gambar'] = $gambarName;

        } else {
            unset($input['aplikasi']);
        }

        $profit->update($input);

        //redirect to index
        return redirect()->route('profit.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $profit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profit $profit)
    {
        //
    }
}
