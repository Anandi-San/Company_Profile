<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;


class AdminBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = [
            'title' => 'Manajemen banners',
            'banners' => Banner::get(),
            'content' => 'admin/banner/index'
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
            'title' => 'Tambah baners',
            'content' => 'admin/banner/add'
        ];
        return view('admin.layout.wrapper', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // dd($request->all());
        $data = $request->validate([
            'headline'=> 'required',
            'Desc'=> 'required',
            // 'urutan'=> 'required',
            'gambar'=> 'required',

            ]);
            $data['urutan'] = 0; 
            // dd('tes');

            // FILE Gambar
            if($request->hasFile('gambar')){
                $gambar = $request->file('gambar');
                $file_name = time().'-'.$gambar->getClientOriginalName();
                $storage = 'uploads/banners/';
                $gambar->move($storage, $file_name);
                $data['gambar'] = $storage . $file_name;
            }else{
                $data['gambar'] = null;
            }

        // $data['password'] = Hash::make($data['password']);
        // dd($data);

        Banner::create($data);
        // Alert::success('Sukses', 'Data Ditambahkan');
        return redirect('/admin/banner');
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
            'title' => 'Edit baners',
            'baners' => Banner::find($id),
            'content' => 'admin/banner/add'
        ];
        return view('admin.layout.wrapper', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $banner = Banner::find($id);
        $data = $request->validate([
            'headline'=> 'required',
            'deskripsi'=> 'required',
            // 'urutan'=> 'required',
            // 'gambar'=> 'required',

            ]);
            $data['urutan'] = 0; 

            // FILE Gambar
            if($request->hasFile('gambar')){

                if($banner->gambar != null){
                    unlink($banner->gambar);
                }

                $gambar = $request->file('gambar');
                $file_name = time().'-'.$gambar->getClientOriginalName();
                $storage = 'uploads/banners/';
                $gambar->move($storage, $file_name);
                $data['gambar'] = $storage . $file_name;
            }else{
                $data['gambar'] = $banner->gambar;
            }

  
        $banner->update($data);
        // Alert::success('Sukses', 'Data Di-Update');
        return redirect('/admin/banner');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        if($banner->gambar != null){
            unlink($banner->gambar);
        }
        //
        $banner = Banner::find($id);
        $banner->delete();
        // Alert::success('Sukses', 'Data Terhapus');
        return redirect('/admin/banner');
    }
}