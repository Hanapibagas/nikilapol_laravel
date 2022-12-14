<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Header;

class HeaderController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get posts
        $header = Header::all();

        //render view with posts
        return view('panel.header.index', compact('header'));
    }

    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        return view('panel.header.create');
    }

    /**
     * store
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request, Header $header)
    {
        $input = $request->all();

        if ($cover = $request->file('cover')) {
            $destinationPath = 'image/';
            $coverName = date('Ymd') . "." . $cover->getClientOriginalExtension();
            $cover->move($destinationPath, $coverName);
            $input['cover'] = $coverName;
        }
        if ($aplikasi = $request->file('aplikasi')) {
            $destinationPath = 'image/';
            $aplikasiName = date('Ymd') . "." . $aplikasi->getClientOriginalExtension();
            $aplikasi->move($destinationPath, $aplikasiName);
            $input['aplikasi'] = $aplikasiName;
        } else {
            unset($input['aplikasi']);
        }

        $header->create($input);

        //redirect to index
        return redirect()->route('header.index');
    }

    /**
     * edit
     *
     * @param  mixed $post
     * @return void
     */
    public function edit(Header $header)
    {
        return view('panel.header.edit', compact('header'));
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $post
     * @return void
     */
    public function update(Request $request, Header $header)
    {
        $input = $request->all();

        //check if image is uploaded
        if ($cover = $request->file('cover')) {
            $destinationPath = 'image/';
            $coverName = date('Ymd') . "." . $cover->getClientOriginalExtension();
            $cover->move($destinationPath, $coverName);
            $input['cover'] = $coverName;
        }
        if ($aplikasi = $request->file('aplikasi')) {
            $destinationPath = 'image/';
            $aplikasiName = date('Ymd') . "." . $aplikasi->getClientOriginalExtension();
            $aplikasi->move($destinationPath, $aplikasiName);
            $input['aplikasi'] = $aplikasiName;
        } else {
            unset($input['aplikasi']);
        }

        $header->update($input);

        //redirect to index
        return redirect()->route('header.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
}
