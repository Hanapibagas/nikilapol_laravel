<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faq = Faq::all();
        return view('panel.faq.index', compact('faq'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.faq.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Faq $faq)
            {
                //Validasi input data
                $this->validate($request, [
                    'title'     => 'required|min:5',
                    'slug'      => 'required|min:5',
                    'category'  => 'required|min:5',
                    'description' => 'required|min:5',
                    ]);
        
                    // $description = $request->description;
                    // $dom = new \DomDocument();
                    // $dom->loadHtml($description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
                    // $imageFile = $dom->getElementsByTagName('img');
             
                    // foreach($imageFile as $item => $image){
                    //     $data = $image->getAttribute('src');
                    //     list($type, $data) = explode(';', $data);
                    //     list(, $data)      = explode(',', $data);
                    //     $imgeData = base64_decode($data);
                    //     $image_name= "/upload/" . Str::random(3) . "-" . date('Ymd').$item.'.png';
                    //     $path = public_path() . $image_name;
                    //     file_put_contents($path, $imgeData);
                    //     $image->removeAttribute('src');
                    //     $image->setAttribute('src', $image_name);
                    //  }
                    // $description = $dom->saveHTML();
                    $input = $request->all();
                    $faq->create($input);
                
                    //redirect to index
                return redirect()->route('faq.index')->with(['success' => 'Data Berhasil Ditambah!']);
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
    public function edit(Faq $faq)
    {
        return view('panel.faq.edit', compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faq $faq)
    {
        //Validasi input data
        $this->validate($request, [
            'title'     => 'required|min:5',
            'category'  => 'required|min:5',
            'description' => 'required|min:5',
            ]);
            $input = $request->all();  
            $faq->update($input);
        
            //redirect to index
        return redirect()->route('faq.index')->with(['success' => 'Data Berhasil Ditambah!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faq $faq)
    {
        //Hapus file di public path
        if (File::exists(public_path('media/'.$faq->upload))) {
            File::delete(public_path('media/'.$faq->upload));

        }

        $faq->delete();
        //redirect to index
        return redirect()->route('faq.index')->with(['success' => 'Data Berhasil Hapus!']);
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
