<?php

namespace App\Http\Controllers;

use App\Models\Header;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
    public function store(Request $request)
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
         $coverName = time() . '.' . $cover->getClientOriginalExtension();
         $coverPath = public_path('/images/');
         $cover->move($coverPath, $coverName);


        //create post
        Header::create([
            'title'     => $request->title,
            'description'     => $request->description,
            'link'     => $request->title,
            'cover' => "/images/" . $coverName,
        ]);

        //redirect to index
        return redirect()->route('panel.header.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
