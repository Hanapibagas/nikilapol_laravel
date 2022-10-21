<?php

namespace App\Http\Controllers;

use App\Models\Whitelabel;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class WhitelabelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\Whitelabel  $whitelabel
     * @return \Illuminate\Http\Response
     */
    public function show(Whitelabel $whitelabel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Whitelabel  $whitelabel
     * @return \Illuminate\Http\Response
     */
    public function edit(Whitelabel $whitelabel)
    {
        return view('panel.whitelabel.edit', compact('whitelabel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Whitelabel  $whitelabel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Whitelabel $whitelabel)
    {
        $input = $request->all();
        // Cek jika ada logo yang diupload
        if ($logo = $request->file('logo')) {
            $destinationPath = 'image/';
            $logoName = $logo->getClientOriginalName();
            $logo->move($destinationPath, $logoName);
            $input['logo'] = $logoName;

        } else {
            unset($input['logo']);
        }        
        
        if ($bantuan = $request->file('bantuan')) {
            $destinationPath = 'image/';
            $bantuanName = $bantuan->getClientOriginalName();
            $bantuan->move($destinationPath, $bantuanName);
            $input['bantuan'] = $bantuanName;

        }

        if ($cta = $request->file('cta')) {
            $destinationPath = 'image/';
            $ctaName = $cta->getClientOriginalName();
            $cta->move($destinationPath, $ctaName);
            $input['cta'] = $ctaName;

        }
        if ($favicon = $request->file('favicon')) {
            $destinationPath = 'image/';
            $faviconName = $favicon->getClientOriginalName();
            $favicon->move($destinationPath, $faviconName);
            $input['favicon'] = $faviconName;

        }

        $whitelabel->update($input);

        //redirect to index
        return redirect()->route('whitelabel.edit',$whitelabel->id)->with(['success' => 'Data Berhasil Diubah!']);       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Whitelabel  $whitelabel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Whitelabel $whitelabel)
    {
        //
    }
}
