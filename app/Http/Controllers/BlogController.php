<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Whitelabel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = Blog::all();
        $whitelabel = whitelabel::all();
        return view('panel.blog.index', compact('blog','whitelabel'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Blog $blog)
            {
                //Validasi input data
                $this->validate($request, [
                    'title'     => 'required|min:5',
                    'slug'      => 'required|min:5',
                    'category'  => 'required|min:5',
                    'author'  => 'required|min:5',
                    'description' => 'required|min:5',
                    'gambar'    => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
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
                
                    $blog->create($input);
                
                    //redirect to index
                return redirect()->route('blog.index')->with(['success' => 'Data Berhasil Ditambah!']);
            }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        $whitelabel = whitelabel::all();
        return view('panel.blog.show',compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('panel.blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //Validasi input data
        $this->validate($request, [
            'title'     => 'required|min:5',
            'slug'      => 'required|min:5',
            'category'  => 'required|min:5',
            // 'author'  => 'required|min:5',
            'description' => 'required|min:5',
            // 'gambar'    => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);
            $input = $request->all();

            //cek jika ada gambar yang di upload
            if ($gambar = $request->file('gambar')) {
                $destinationPath = 'image/';
                $gambarName = Str::random(3) . "-" . date('Ymd') . "." . $gambar->getClientOriginalExtension();
                $gambar->move($destinationPath, $gambarName);
                $input['gambar'] = $gambarName;
        
            }
             else {
                unset($input['gambar']);
            }
        
            $blog->update($input);
        
            //redirect to index
        return redirect()->route('blog.index')->with(['success' => 'Data Berhasil Ditambah!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //Hapus file di public path
        if (File::exists(public_path('image/'.$blog->gambar))) {
            File::delete(public_path('image/'.$blog->gambar));

        }
        if (File::exists(public_path('media/'.$blog->upload))) {
            File::delete(public_path('media/'.$blog->upload));

        }

        $blog->delete();
        //redirect to index
        return redirect()->route('blog.index')->with(['success' => 'Data Berhasil Hapus!']);
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;
    
            $request->file('upload')->move(public_path('media'), $fileName);
    
            $url = asset('media/' . $fileName);
            return response()->json(['fileName' => $fileName, 'uploaded'=> 1, 'url' => $url]);
        }
    }
}
