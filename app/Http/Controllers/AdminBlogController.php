<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
<<<<<<< HEAD
=======
use App\Models\Kategori;

>>>>>>> dev

class AdminBlogController extends Controller
{
    public function index()
    {
        //
        $data = [
<<<<<<< HEAD
            'title' => 'Manajemen blog',
            'blog' => Blog::get(),
=======
            'title' => 'Manajemen Blog',
            'blog' => Blog::with('kategori')->get(),
>>>>>>> dev
            'content' => 'admin/blog/index'
        ];
        return view('admin.layout.wrapper', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $data = [
<<<<<<< HEAD
            'title' => 'Tambah Blog',
=======
            'title' => 'Tambah blog',
            'kategori' => Kategori::get(),
>>>>>>> dev
            'content' => 'admin/blog/add'
        ];
        return view('admin.layout.wrapper', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
        //
        // dd($request->all());
        $data = $request->validate([
            'title'=> 'required',
            'kategori_id'=> 'required',
            'body'=> 'required',
            'cover'=> 'required',

            ]);
            // dd('tes');

            // FILE Gambar
            if($request->hasFile('cover')){
                $cover = $request->file('cover');
                $file_name = time().'-'.$cover->getClientOriginalName();
                $storage = 'uploads/blogs/';
                $cover->move($storage, $file_name);
                $data['cover'] = $storage . $file_name;
            }else{
                $data['cover'] = null;
            }

        // $data['password'] = Hash::make($data['password']);
        // dd($data);

        Blog::create($data);
        // Alert::success('Sukses', 'Data Ditambahkan');
=======
        $data = $request->validate([
            'title'=> 'required',
            'kategori_id => required',
            'body'=> 'required',
            // 'urutan'=> 'required',
            'cover'=> 'required',
        ]);


        if($request->hasFile('cover')){
            $cover = $request->file('cover');
            $file_name = time(). '-'. $cover->getClientOriginalName();
            $storage = 'uploads/banners/';
            $cover->move($storage, $file_name);
            $data['cover'] = $storage . $file_name;
        }else{
            $data['cover'] = null;
        }

        Blog::create($data);
>>>>>>> dev
        return redirect('/admin/posts/blog');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = [
            'title' => 'Edit blog',
            'blog' => Blog::find($id),
            'content' => 'admin/blog/show'
        ];
        return view('admin.layout.wrapper', $data);
    }

<<<<<<< HEAD
=======

>>>>>>> dev
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $data = [
            'title' => 'Edit blog',
            'blog' => Blog::find($id),
<<<<<<< HEAD
=======
            'kategori' => Kategori::get(),
>>>>>>> dev
            'content' => 'admin/blog/add'
        ];
        return view('admin.layout.wrapper', $data);
    }

    /**
     * Update the specified resource in storage.
     */
<<<<<<< HEAD
    public function update(Request $request, string $id)
    {
        //
        $blog = Blog::find($id);
        $data = $request->validate([
            'title'=> 'required',
            'body'=> 'required',
            'kategori_id'=> 'required',
            // 'cover'=> 'required',

            ]);

            // FILE Gambar
            if($request->hasFile('cover')){

                if($blog->cover != null){
                    unlink($blog->cover);
                }

                $cover = $request->file('cover');
                $file_name = time().'-'.$cover->getClientOriginalName();
                $storage = 'uploads/blog/';
                $cover->move($storage, $file_name);
                $data['cover'] = $storage . $file_name;
            }else{
                $data['cover'] = $blog->cover;
            }

  
        $blog->update($data);
        // Alert::success('Sukses', 'Data Di-Update');
=======
    public function update(Request $request,$id)
    {
        //
        $blog = Blog::find('$id');
        $data = $request->validate([
            'title'=> 'required',
            'kategori_id => required',
            'body'=> 'required',
            // 'urutan'=> 'required',
            'cover'=> 'required',
        ]);

        if($request->hasFile('cover')){

            if($blog->cover != null){
                unlink($blog->cover);
            }


            $cover = $request->file('cover');
            $file_name = time(). '-'. $cover->getClientOriginalName();
            $storage = 'uploads/blogs/';
            $cover->move($storage, $file_name);
            $data['cover'] = $storage . $file_name;
        }else{
            $data['cover'] = $blog->cover;
        }

        $blog->update($data);
>>>>>>> dev
        return redirect('/admin/posts/blog');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

<<<<<<< HEAD
        if($blog->cover != null){
            unlink($blog->cover);
        }
        //
        $blog = Blog::find($id);
        $blog->delete();
        // Alert::success('Sukses', 'Data Terhapus');
=======
        $blog = Blog::find($id);

        if($blog->cover != null){
            unlink($blog->cover);
        }
        
        $blog->delete();
>>>>>>> dev
        return redirect('/admin/posts/blog');
    }
}
