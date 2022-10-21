<?php

namespace App\Http\Controllers;

use App\Models\Merctutor;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class MerctutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $merctutor = Merctutor::all();
        return view('panel.merctutor.index', compact('merctutor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view('panel.merctutor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Merctutor $merctutor)
    {

        // dd($request->except('_token'));
        // Merctutor::create($request->except('_token'));
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'gambar1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
    
        $input = $request->all();

        
        if ($gambar1 = $request->file('gambar')) {
            $destinationPath = 'image/';
            $gambarName = Str::random(3) . "-" . date('Ymd') . "." . $gambar1->getClientOriginalExtension();
            $gambar1->move($destinationPath, $gambarName);
            $input['gambar1'] = $gambarName;
        } else {
            unset($input['gambar1']);
        }
        $merctutor->create($input);

        //redirect to index
        return redirect()->route('merctutor.index')->with(['Sukses menambahkan data']);
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
    public function edit(Merctutor $merctutor)
    {
        return view('panel.merctutor.edit', compact('merctutor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, Merctutor $merctutor)
    {
        $this->validate($request, [
            'title' => 'required|min:1',
            'description' => 'required|min:5',
            'gambar1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
    
        $input = $request->all();

        if ($gambar1 = $request->file('gambar')) {
            $destinationPath = 'image/';
            $gambarName = Str::random(3) . "-" . date('Ymd') . "." . $gambar1->getClientOriginalExtension();
            $gambar1->move($destinationPath, $gambarName);
            $input['gambar1'] = $gambarName;
        } else {
            unset($input['gambar1']);
        }

        $merctutor->update($input);

        //redirect to index
            return redirect()->route('merctutor.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( Merctutor $merctutor)
    {
         if (File::exists(public_path('image/'.$merctutor->gambar))) {
            File::delete(public_path('image/'.$merctutor->gambar));

        }

        $merctutor->delete();
        //redirect to index
        return redirect()->route('merctutor.index')->with(['success' => 'Data Berhasil Hapus!']);
    }
}
