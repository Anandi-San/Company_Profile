<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;


class AdminProfilController extends Controller
{
    public function index()
    {
        //
        $data = [
            'title' => 'Manajemen profil',
            'profil' => Profil::first(),
            'content' => 'admin/profil/index'
        ];
        return view('admin.layout.wrapper', $data);
    }
    
    public function update(Request $request)
    {
        //
        $profil = Profil::first();
        $data = $request->validate([
            'title'=> 'required',
            'desc'=> 'required',
            // 'cover'=> 'required',
            // 'urutan'=> 'required',
            // 'cover'=> 'required',

            ]);

            // FILE Gambar
            if($request->hasFile('cover')){

                if($profil->cover != null){
                    unlink($profil->cover);
                }

                $cover = $request->file('cover');
                $file_name = time().'-'. $cover->getClientOriginalName();
                $storage = 'uploads/images/';
                $cover->move($storage, $file_name);
                $data['cover'] = $storage . $file_name;
            }else{
                $data['cover'] = $profil->cover;
            }

  
        $profil->update($data);
        // Alert::success('Sukses', 'Data Di-Update');
        return redirect('/admin/profil');
    }
}
