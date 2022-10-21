<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $layanan = Layanan::all();
        return view('panel.layanan.index', compact('layanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.layanan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Layanan $layanan)
    {
        //validate form
        $this->validate($request, [
            'title'     => 'required|min:5',
            'description'     => 'required|min:5',
            'link'     => 'required|min:5',
            'cover'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

         //upload image
         $cover = request()->file('cover');
         $coverName = Str::random(3) . "-" . date('Ymd') . "." . $cover->getClientOriginalExtension();
         $coverPath = public_path('/images/');
         $cover->move($coverPath, $coverName);
       
        //create post
        Layanan::create([
            'title'     => $request->title,
            'description'     => $request->description,
            'link'     => $request->title,
            'cover' => "/images/" . $coverName,
        ]);      

        //redirect to index
        return redirect()->route('layanan.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
    public function edit(Layanan $layanan)
    {
        return view('panel.layanan.edit', compact('layanan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Layanan $layanan)
    {
        //validate form
        $this->validate($request, [
            'title'     => 'required|min:5',
            'description'     => 'required|min:5',
            'link'     => 'required|min:5',
            // 'cover'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        //check if image is uploaded
        if ($cover = $request->file('cover')) {
            $destinationPath = 'image/';
            $coverName = Str::random(3) . "-" . date('Ymd') . "." . $cover->getClientOriginalExtension();
            $cover->move($destinationPath, $coverName);
            $input['cover'] = $coverName;

        } else {
            unset($input['cover']);
        }

        $layanan->update($input);

        //redirect to index
        return redirect()->route('layanan.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Layanan $layanan)
    {
        //Hapus file di public path
        if (File::exists(public_path('image/'.$layanan->gambar))) {
            File::delete(public_path('image/'.$layanan->gambar));

        }

        $layanan->delete();
        //redirect to index
        return redirect()->route('layanan.index')->with(['success' => 'Data Berhasil Hapus!']);
    }
}
