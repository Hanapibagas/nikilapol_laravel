<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class BannerController extends Controller
{
    public function index()
    {
        $banner = Banner::all();
        return view('panel.banner.index', compact('banner'));
    }

    public function create()
    {
        return view('panel.banner.create');
    }

    public function store(Request $request, Banner $banner)
    {
        //Validasi input dataa
        $this->validate($request, [
            'title'    => 'required|min:5',
            'link'     => 'required|min:5',
            'gambar'   => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $input = $request->all();

        //cek jika ada gambar yang di upload
        if ($gambar = $request->file('gambar')) {
            $destinationPath = 'image/';
            $gambarName = Str::random(3) . "-" . date('Ymd') . "." . $gambar->getClientOriginalExtension();
            $gambar->move($destinationPath, $gambarName);
            $input['gambar'] = $gambarName;

        } else {
            unset($input['gambar']);
        }

        $banner->create($input);

        //redirect to index
        return redirect()->route('banner.index')->with(['success' => 'Data Berhasil Ditambah!']);
    }

    public function show(Banner $banner)
    {
        //
    }

    public function edit(Banner $banner)
    {
        return view('panel.banner.edit', compact('banner'));
    }

    public function update(Request $request, Banner $banner)
    {
        //validate form
        $this->validate($request, [
            'title'     => 'required|min:5',
            'link'     => 'required|min:5',
            // 'gambar'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        // Cek jika ada gambar yang diupload
        if ($gambar = $request->file('gambar')) {
            $destinationPath = 'image/';
            $gambarName = Str::random(3) . "-" . date('Ymd') . "." . $gambar->getClientOriginalExtension();
            $gambar->move($destinationPath, $gambarName);
            $input['gambar'] = $gambarName;

        } else {
            unset($input['gambar']);
        }

        $banner->update($input);

        //redirect to index
        return redirect()->route('banner.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy(Banner $banner)
    {
        //Hapus file di public path
        if (File::exists(public_path('image/'.$banner->gambar))) {
            File::delete(public_path('image/'.$banner->gambar));

        }

        $banner->delete();
        //redirect to index
        return redirect()->route('banner.index')->with(['success' => 'Data Berhasil Hapus!']);
    }
}
