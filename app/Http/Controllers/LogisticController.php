<?php

namespace App\Http\Controllers;

use App\Models\Logistic;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class LogisticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logistic = Logistic::all();
        return view('panel.layanan.logistic', compact('logistic'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.layanan.createlogistic');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Logistic $logistic)
    {
        //Validasi input data
        $this->validate($request, [
            'title'    => 'required|min:5',
            'link'     => 'required|min:5',
            'cover'   => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $input = $request->all();

        //cek jika ada cover yang di upload
        if ($cover = $request->file('cover')) {
            $destinationPath = 'image/';
            $coverName = Str::random(3) . "-" . date('Ymd') . "." . $cover->getClientOriginalExtension();
            $cover->move($destinationPath, $coverName);
            $input['cover'] = $coverName;

        } else {
            unset($input['cover']);
        }

        $logistic->create($input);

        //redirect to index
        return redirect()->route('logistic.index')->with(['success' => 'Data Berhasil Ditambah!']);
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
    public function edit(Logistic $logistic)
    {
        return view('panel.layanan.editlogistic', compact('logistic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Logistic $logistic)
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

        }

        $logistic->update($input);

        //redirect to index
        return redirect()->route('logistic.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Logistic $logistic)
    {
        //Hapus file di public path
        if (File::exists(public_path('image/'.$logistic->gambar))) {
            File::delete(public_path('image/'.$logistic->gambar));

        }

        $logistic->delete();
        //redirect to index
        return redirect()->route('logistic.index')->with(['success' => 'Data Berhasil Hapus!']);
    }
}
