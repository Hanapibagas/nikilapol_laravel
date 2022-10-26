<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Showcase;
use App\Models\ShowcaseGalleri;
use Illuminate\Http\Request;

class GalleriShowcaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeri = ShowcaseGalleri::with(['showcase'])->get();

        return view('panel.showcase.galeri.index', compact('galeri'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $showcase = Showcase::all();

        return view('panel.showcase.galeri.create', compact('showcase'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $data['gambar'] = $request->file('gambar')->store('assets/gallery', 'public');

        ShowcaseGalleri::create($data);

        return redirect()->route('galery.index');
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
        $items = ShowcaseGalleri::findOrFail($id);

        return view('panel.showcase.galeri.edit', compact('items'));
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
        // $input = $request->all();
        // if ($gambar = $request->file('gambar')) {
        //     $destinationPath = 'image/';
        //     $gambarName = Str::random(3) . "-" . date('Ymd') . "." . $gambar->getClientOriginalExtension();
        //     $gambar->move($destinationPath, $gambarName);
        //     $input['gambar'] = $gambarName;
        // } else {
        //     unset($input['aplikasi']);
        // }

        // $show->update($input);

        // return redirect()->route('galery.index');
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
