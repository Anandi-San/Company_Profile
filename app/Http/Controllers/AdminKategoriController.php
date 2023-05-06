<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class AdminKategoriController extends Controller
{
    public function index()
    {
        //
        $data = [
<<<<<<< HEAD
            'title' => 'Manajemen kategori',
            'kategori' =>Kategori::get(),
=======
            'title' => 'Manajemen Kategori',
            'kategori' => Kategori::get(),
>>>>>>> dev
            'content' => 'admin/kategori/index'
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
            'title' => 'Tambah kategori',
            'content' => 'admin/kategori/add'
        ];
        return view('admin.layout.wrapper', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //dd($request->all());
        $data = $request->validate([
            'name'=> 'required',
<<<<<<< HEAD
            
        ]);


       Kategori::create($data);
=======
        ]);


        Kategori::create($data);
>>>>>>> dev
        return redirect('/admin/posts/kategori');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $data = [
            'title' => 'Edit kategori',
            'kategori' => Kategori::find($id),
            'content' => 'admin/kategori/add'
        ];
        return view('admin.layout.wrapper', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $kategori = Kategori::find($id);
        $data = $request->validate([
            'name'=> 'required',
        ]);

<<<<<<< HEAD
=======

>>>>>>> dev
        $kategori->update($data);
        return redirect('/admin/posts/kategori');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
<<<<<<< HEAD
        $kategori =Kategori::find($id);
=======
        $kategori = Kategori::find($id);
>>>>>>> dev
        $kategori->delete();
        return redirect('/admin/posts/kategori');
    }
}
