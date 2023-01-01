<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Toko;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class TokoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = auth()->user()->is_admin;
        if($admin)
        {
            return view('admin.usaha.index',[
                'tokos' => Toko::latest()->get()
            ]);
        }

        $user = auth()->user()->name;
        if($user)
        {
            return view('admin.usaha.index',[
                'tokos' => Toko::where('nama', '=', $user)->get()
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.usaha.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
           
            'x' => 'required',
            'y' => 'required',
            'jam_buka' => 'required',
            'jam_tutup' => 'required',
        ]);

      

        if($request->file('image')){
            $validate['image'] = $request->file('image')->store('images');
        }

        Toko::create($validate);

        return redirect('/dashboard/toko')->with('success','Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Toko  $toko
     * @return \Illuminate\Http\Response
     */
    public function show(Toko $toko)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Toko  $toko
     * @return \Illuminate\Http\Response
     */
    public function edit(Toko $toko)
    {
        return view('admin.usaha.edit',[
            'tokos' => $toko
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Toko  $toko
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Toko $toko)
    {
        $rules = [
            'x' => 'required',
            'y' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
           
            'image' => 'required|max:5120|mimes:jpg,png',
            'jam_buka' => 'required',
            'jam_tutup' => 'required',
        ];

       

        $validate = $request->validate($rules);

        if($request->file('image')){
            if($request->oldImage){
                Storage::delete([$request->oldImage]);
            }
            $validate['image'] = $request->file('image')->store('images');
        }

        Toko::where('id', $toko->id)->update($validate);

        return redirect('/dashboard/toko')->with('success','Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Toko  $toko
     * @return \Illuminate\Http\Response
     */
    public function destroy(Toko $toko)
    {
        Toko::destroy($toko->id);

        if($toko->image){
            Storage::delete([$toko->image]);
        }

        return redirect('/dashboard/toko')->with('success','Deleted Successfully!');
    }
}
